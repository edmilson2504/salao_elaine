<?php
require ('programacao.php');
$data = 2016-06-23;

 function findByPartialName($name)
{

$select = $salao->select()
        ->from (array('a' =>'agendamento'),array('id_cliente','id_servico',
        		'data_servico','hora_servico'))
        		->join(array('c' =>'clientes'),
        				'a.id_cliente = c.id')
        	    ->order('data_servico');      
        	    return $this->fetchAll($select);
}       	   

foreach($select as $selecao){
 echo $selecao->nome; 
} 
 
        	   
        	   	print "oi";
        	   
       
 ?>         
         