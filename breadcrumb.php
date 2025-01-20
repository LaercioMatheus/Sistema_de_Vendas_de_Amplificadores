<?php
/*TENHO QUE EDITAR ESSE SCRIPT PARA NÃO MOSTRAR OS ELEMENTOS DO BACKEND */

/*OS 'breadcrumb' DO SITE. CAMINHOS RELATIVOS À PÁGINA QUE O USUÁRIO ESTÁ*/
    function generateBreadcrumbs($path) {
        $pathArray = explode('/', trim($path, '/'));
        $breadcrumbs = '<nav aria-label="breadcrumb"><ol class="nav_breadcrumb">';
        $breadcrumbs .= '<li class="breadcrumb-item"><a href="index.php">Home</a></li>';
        $currentPath = '';

        foreach ($pathArray as $index => $crumb) {
            $currentPath .= '/' . $crumb;

            if ($index == count($pathArray) - 1) {
                $breadcrumbs .= '<li class="breadcrumb-item active" aria-current="page">' . ucfirst($crumb) . '</li>';
            } else {
                $breadcrumbs .= '<li class="breadcrumb-item"><a href="' . $currentPath . '">' . ucfirst($crumb) . '</a></li>';
            }
        }
        
        $breadcrumbs .= '</ol></nav>';
        return $breadcrumbs;
    }
        //Essa função constrói a trilha de navegação dinamicamente, dividindo o caminho em partes e criando os itens do breadcrumb.
        echo generateBreadcrumbs($_SERVER['REQUEST_URI']);
?>