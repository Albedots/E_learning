<?php

namespace App\Http\Controllers;
                                    // Importação dos Models
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\VideoLesson;

class CourseController extends Controller
{
    public function modules($eventId) {     // retornar a view com o event id linkado

        return view("events.modules", ["eventId" => $eventId]);
    }

    public function modules_store(Request $request) {   // cria um novo módulo  

        $module = new Module;
        $event = Event::findOrFail($request->eventId);

        $module->event_id = $event->id;
        $module->title = $request->title;
        $module->save();

        return redirect()->route('lessons.create', ['moduleId' => $module->id]);
    }

    public function moduleEdit($id) {   // procura o módulo pelo id recebido e devolve para a pagina de edição

        $module = Module::findOrFail($id);

        return view("events.editModule", ["module" => $module]);
    }

    public function moduleUpdate(Request $request) {    // Recebe os novos dados do módulo e os atualiza

        $data = $request->all();

        Module::findOrFail($request->id)->update($data);

        return redirect("/")->with("msg", "Módulo editado com sucesso!");
    }
    
    public function lessons($moduleId) {    // retorna a view com o module id linkado
        return view("events.videos", ["moduleId" => $moduleId]);
    }

    public function lessonStore(Request $request) {     // cadastra novas lessons (VideoAulas)
        $lesson = new VideoLesson;

        $lesson->title = $request->title;
        $lesson->video_url = $request->video_url;
        $lesson->description = $request->description;
        $lesson->module_id = $request->moduleId;

        $lesson->save();
        
        return redirect("/dashboard")->with("msg", "Ação feita com sucesso!");
    }

    public function lessonList($id) {   // busca todas as lessons(videoaulas) do modulo linkado pelo ID

        $module = Module::findOrFail($id);
        $lessons = $module->lessons;

        return view("events.moduleLessons", ["lessons" => $lessons, "module" => $module]);
    }

    public function lessonContent($id) {    // retorna o conteúdo da lesson linkado pelo ID
        $lesson = VideoLesson::findOrFail($id);

        return view("events.videoLesson", ["lesson" => $lesson]);
    }

    public function lessonEdit($id) {   // envia a lesson linkada pelo ID para a página de edição
        $lesson = VideoLesson::findOrFail($id);

        return view("events.editLesson", ["lesson" => $lesson]);
    }

    public function lessonUpdate(Request $request) {    // atualiza a lesson

        $data = $request->all();

        VideoLesson::findOrFail($request->id)->update($data);

        return redirect("/")->with("msg", "Aula editada com sucesso");
    }
}
