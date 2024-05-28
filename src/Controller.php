<?php

declare(strict_types=1);

namespace App;

require_once("src/View.php");

class Controller
{
    private const DEFAULT_ACTION = 'list';

    private array $request;
    private View $view;

    public function __construct(array $request)
    {
        $this->request = $request;
        $this->view = new View();
    }
   
    public function run(): void
    {        
        $viewParams = [];
        
        switch($this->action()) {
            case 'create':
                $page = 'create';
                $created = false;
        
                $data = $this->getRequestPost();
                if (!empty($data)) {
                    $created = true;
                    $viewParams = [
                        'title' => $data['title'],
                        'description' => $data['description']
                    ];        
                } 
        
                $viewParams['created'] = $created; 
                break;
            case 'show':
                $viewParams = [
                    'title' => 'Moja notatka',
                    'description' => 'Opis'
                ];   
            break;
            default:
                $page = 'list';    
                $viewParams['resultList'] = "wyświetlamy notatki";
            break;
        }
        $this->view->render($page, $viewParams);    
       
    }

    private function action(): string
    {
        $data = $this->getRequestGet();
        return $data['action'] ?? self::DEFAULT_ACTION;
    }

    private function getRequestPost(): array
    {
        return $this->request['post'] ?? [];
    }

    private function getRequestGet(): array
    {
        return $this->request['get'] ?? [];
    }
}