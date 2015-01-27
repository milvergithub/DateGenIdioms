<?php
/**
 * Created by PhpStorm.
 * User: milver
 * Date: 19/11/14
 * Time: 14:46
 */
if($_POST['constraint_type'] == "foraneas"){
    require_once "../view/formularioForeignKey.phtml";
}else{
    if(($_POST['constraint_type']=="PRIMARY KEY")){
        switch($_POST['data_type']){
            case 'integer':
                require_once "../view/formularioPrimaryKey.phtml";/*formulacio si es integer*/
            break;
            case 'character varying':
                require_once "../view/formularioPrimaryKey.phtml";/*formulario si es text*/
                break;
        }
    }else{
        if( ($_POST['data_type']=="smallint") OR
            ($_POST['data_type']=="integer") OR
            ($_POST['data_type']=="bigint") OR
            ($_POST['data_type']=="serial") OR
            ($_POST['data_type']=="bigserial") OR
            ($_POST['data_type']=="numeric") OR
            ($_POST['data_type']=="decimal")OR
            ($_POST['data_type']=="real") OR
            ($_POST['data_type']=="double precision")){
            if( ($_POST['data_type']=="smallint") OR
                ($_POST['data_type']=="integer") OR
                ($_POST['data_type']=="bigint") OR
                ($_POST['data_type']=="serial") OR
                ($_POST['data_type']=="bigserial")){
                /*SI EL TIPO DE DATO ES numero y entero*/
                require_once "../view/type_data/numeroIntegerView.phtml";
            }else{
                /*SI EL TIPO DE DATO ES numero y con decimal*/
                require_once "../view/type_data/numeroDecimalView.phtml";
            }
        }else{
            if( ($_POST['data_type']=="character varying") OR
                ($_POST['data_type']=="varchar") OR
                ($_POST['data_type']=="character") OR
                ($_POST['data_type']=="char") OR
                ($_POST['data_type']=="text")){
                /*SI EL TIPO DE DATO ES una cadena de caracteres*/
                require_once "../view/type_data/textTypeView.phtml";
            }else{
                if( ($_POST['data_type']=="time without time zone") OR
                    ($_POST['data_type']=="time with time zone") OR
                    ($_POST['data_type']=="timestamp without time zone") OR
                    ($_POST['data_type']=="timestamp with time zone") OR
                    ($_POST['data_type']=="interval") OR
                    ($_POST['data_type']=="date")){
                    /*SI EL TIPO DE DATOS ES una fecha u hora*/
                    require_once "../view/type_data/dateTimeView.phtml";
                }else{
                    if(($_POST['data_type']=="money")){
                    /*SI EL TIPO DE DATOS ES monetario*/
                        require_once "../view/type_data/moneyTypeView.phtml";
                    }else{
                        if(($_POST['data_type']=="bytea")){
                        /*SI EL TIPO DE DATOS ES archivo codificado*/
                            require_once "../view/type_data/byteaTypeView.phtml";
                        }else{
                            if( ($_POST['data_type']=="cidr") OR
                                ($_POST['data_type']=="inet") OR
                                ($_POST['data_type']=="macaddr")){
                                /*SI EL TIPO DE DATOS ES direcciones de red*/
                                    require_once "../view/type_data/redTypeView.phtml";
                            }else{
                                if( ($_POST['data_type']=="boolean") ){
                                    require_once "../view/type_data/booleanTypeView.phtml";
                                }else{
                                    require_once "../view/type_data/type404View.phtml";
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
require_once "../view/formularioArea.phtml";
?>














