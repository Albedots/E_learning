<?php

namespace App\Http\Controllers;
                                    // importação dos Models
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Module;
use App\Models\User;
use Illuminate\Container\Attributes\DB;

class EventController extends Controller
{
    public function index() {

        $search = request("search");

        if($search){

            $events = Event::where([        //logica do campo de pesquisa do search
                ["title", "like", "%".$search."%"]
            ])->get();

        }else {
            $events = Event::all();

        }
        

        return view('welcome', ["events" => $events, "search" => $search]);
    }

    public function create() {
        
        return view("events.create");
    }

    public function store(Request $request) {
        $event = new Event;

        $event->title = $request->title;
        $event->description = $request->description;
        $event->activity = $request->activity;

        // image Upload e tratamento
        if($request->hasFile("image") && $request->file("image")->isValid()) {
            
            $requestImage = $request->image;

            $extension = $requestImage->extension();
            // cria um hash unico para cada imagem e coloca no nome dela
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . $extension);
        
            $request->image->move(public_path("img/events"), $imageName);
            // grava a image no banco
            $event->image = $imageName;
        }

        $user = auth()->user();

        $event->user_id = $user->id;
        
        $event->save();

        return redirect()->route('modules.create', ['eventId' => $event->id]);
    }

    public function show($id) {
        
        $event = Event::findOrFail($id);

        $modules = $event->modules; // chamo função da realação hasmany do event (pega todos os modulos relacionados aaquele evento)
            // Filtra os usuários e para para de procurar apos achar o primeiro resultado
        $eventOwner = User::where("id", $event->user_id)->first()->toArray();

        return view("events.show", ["event" => $event, "eventOwner" => $eventOwner, "modules" => $modules]);
    }

    public function dashboard() {   // action que retorna todos os eventos(cursos) do usuário

        $user = auth()->user();

        $events = $user->events;    // events criado na model
        
        return view("events.dashboard", ["events" => $events]);
    }

    public function destroy($id) {  // action que deleta os dados do Curso
        
        Event::findOrFail($id)->delete();

        return redirect("/dashboard")->with("msg", "Curso excluído com sucesso!");
    }

    public function edit($id){  // Localiza o evento pelo id recebido e retorna o evento procurado para a view de edição
        
        $event = Event::findOrFail($id);

        return view("events.edit", ["event" => $event]);
    }

    public function update(Request $request) {

        $data = $request->all();

                // image Update e tratamento
            if($request->hasFile("image") && $request->file("image")->isValid()) {
            
                $requestImage = $request->image;
        
                $extension = $requestImage->extension();
                // cria um hash unico para cada imagem e coloca no nome dela
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . $extension);
                
                $request->image->move(public_path("img/events"), $imageName);
                //grava a image no banco
                $data["image"] = $imageName;
            }
        

        Event::findOrFail($request->id)->update($data);

        return redirect("/dashboard")->with("msg", "Curso editado com sucesso!");
    }

    // public function joinEvent($id) {    // TODO: action que permite aos usuarios normais entrarem no curso
    //     $user = auth()->user();

    //     $user->eventsAsParticipant()->attach($id);

    //     $event = Event::findOrFail($id);

    // }
}
