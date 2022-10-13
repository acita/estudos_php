<?php

$hierarquia = array(
        array(
        'nome_cargo' => 'CEO',
        'subordinados' => 
            array(

                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Gerente de vendas',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Supervisor de vendas'
                                )
                            )
                        )
                    )
                ),
    
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Gerente de Contas a pagar',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Supervisor de Contas a pagar',
                                )
                            )
                        )
                    )
                ),
    
                array(
                    'nome_cargo' => 'Diretor de Planejamento',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Supervisor de planjemanto'
                        )
                    )
                ),
    
                array(
                    'nome_cargo' => 'Diretor Administrativo',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Supervisor Administrativo'
                        )
                    )
                )


            )
            
        )
    );

function exibe($cargos){

    $html = "<ul>";

    foreach ($cargos as $cargo){
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";

    }

    $html .= "<ul>";

    return $html;
}

echo exibe($hierarquia);


