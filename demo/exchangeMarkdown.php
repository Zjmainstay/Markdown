<?php
    require '../markdown.class.php';

    switch(strtolower(@$_POST['type'])) {
        case 'md2html':
        case 'markdown2html':
            $func          = 'parseMarkdown';
            break;
        case 'html2md':
        case 'html2markdown':
            $func          = 'parseHtml';
            break;
        default:
            break;
    }
    if(empty($func) || empty($_POST['content'])) {
        $html   = '参数错误';
        $status = false;
    } else {
        $obj    = new Markdown();
        $html   = call_user_func_array(array($obj, $func), array($_POST['content']));
        $status = true;
    }
    
    echo json_encode(array(
        'status'    => $status,
        'html'      => $html,
    ));

//End_php