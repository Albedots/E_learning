<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ***E-learning Platform***

 ## ***Sobre o Projeto***
O objetivo é criar uma plataforma de E-learning que permita a criação, edição e 
remoção de cursos, módulos e videoaulas, proporcionando uma experiência interativa de aprendizado online.


## ***Funcionalidades***

- #### **Cadastro e Login:** Usuários podem se cadastrar e realizar login para acessar a plataforma.
- #### **Criação de Cursos:** Permite a criação de cursos com módulos e videoaulas.
- #### **Edição de Cursos:** É possível editar os cursos, módulos e videoaulas criados.
- #### **Remoção de Conteúdos:** Oferece a funcionalidade para remover cursos, módulos e videoaulas.
- #### **Campo de Pesquisa:** Inclui uma barra de pesquisa para facilitar a navegação por cursos e conteúdos.

## ***Funcionalidades Pendentes***

- [ ] ~~Contagem do total de pessoas cadastras no curso~~
- [ ] Contagem de Videoaulas de um curso no dashboard
- [ ] Capacidade de reordenação dinâmica das videoaulas, cursos e módulos


## ***Stacks***

- ####  **Estrutura e ambiente da aplicação:** [Laravel Framework](https://laravel.com/)
- ####  **Visual:** [Bootstrap](https://getbootstrap.com/), [Laravel Blade](https://laravel.com/docs/11.x/blade)

- #### **ícones:** [IonIcon](https://ionic.io/ionicons)

- #### **Containerização:** [Laravel Sail](https://laravel.com/docs/11.x/sail)

- #### **Banco de dados** [Mysql Laravel](https://laravel.com/docs/11.x/database)

## ***Status do Projeto***

Este é um protótipo inicial, e alguns recursos ainda precisam ser complementados para o pleno funcionamento da plataforma.

## ***Requisitos do projeto***
- **[Docker](https://www.docker.com/)**
- **[PHP Composer](https://getcomposer.org/)** - opcional
- **[Linux](https://www.linux.org/pages/download/)** ou **[WSL2 windows](https://learn.microsoft.com/pt-br/windows/wsl/install)**
- **[Git](https://git-scm.com/)**

## ***Como rodar o projeto (passo a passo)***

Use o **bash** do linux ou o **wsl 2** do windows

1.  ```bash
    git clone https://github.com/Albedots/E_learning.git
    ```

2.  ```bash
    cd <projeto>
    ```

3.  ```bash
    ./vendor/bin/sail build --no-cache    
    ```

4.  ```bash
    ./vendor/bin/sail up -d
    ```

5.  ```bash
    ./vendor/bin/sail artisan migrate && ./vendor/bin/sail artisan db:seed
    ```

6. Entre na **URL**:`http://localhost/`

## ***Login***

- Nome: Ecode
- Email: dev@agenciaecode.com.br
- Senha: Ecode@123 

## ***Registro***

- É possível criar uma conta personalizada a seu gosto

## ***Como fechar o projeto***

-   ```bash
    ./vendor/bin/sail down    
    ```

## ***Bugs & Error***
Qualquer problema no funcionamento é só me notificar.