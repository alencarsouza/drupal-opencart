<?php
/*
Atualização do pacote de idioma Português do Brasil (pt-br) Opencart 1.5.1.3
Traduzido e adaptado por [tag4] Agência de Idéias Livres! - http://www.tag4.net

Codificação: Unicode (UTF-8)
Créditos  da versão v1.5.1.1: Manoel Vidal, Brunna e Jeann
Comunidade opencartbrasil.com.br e surgimento.com.br

Este arquivo faz parte de um software livre; você pode redistribui-lo e/ou 
modifica-lo dentro dos termos da Licença Pública Geral GPL como
publicada pela Fundação do Software Livre (FSF); na versão 3 da
Licença.

Este arquivo é distribuido na esperança que possa ser útil,
mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÃO
a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a Licença 
Pública Geral GNU para maiores detalhes.

Você deve ter recebido uma cópia da Licença Pública Geral GPL junto 
com este programa, se não, acesse <http://www.gnu.org/licenses/>
*/

// Heading  
$_['heading_title']       = 'Cupons';

// Text
$_['text_success']        = 'Cupom atualizado com sucesso!';
$_['text_percent']        = 'Porcentagem';
$_['text_amount']         = 'Valor fixo';

// Column
$_['column_name']         = 'Nome do cupom';
$_['column_code']         = 'Código';
$_['column_discount']     = 'Desconto';
$_['column_date_start']   = 'Data do início';
$_['column_date_end']     = 'Data do fim';
$_['column_status']       = 'Situação';
$_['column_order_id']     = 'ID de Pedido';
$_['column_customer']     = 'Cliente';
$_['column_amount']       = 'Valor';
$_['column_date_added']   = 'Data criação';
$_['column_action']       = 'Ação';


// Entry
$_['entry_name']          = 'Nome do cupom:';
$_['entry_code']          = 'Codigo:<br /><span class="help">O código que o cliente insere para obter o desconto</span>';
$_['entry_type']          = 'Tipo de aplicação:<br /><span class="help">Valor percentual ou fixo</span>';
$_['entry_discount']      = 'Desconto:';
$_['entry_logged']        = 'Autenticação do cliente:<br /><span class="help">O cliente deve estar autenticado para usar o cupom.</span>';
$_['entry_shipping']      = 'Frete grátis:';
$_['entry_total']         = 'Valor total:<br /><span class="help">O valor total necessário da compra para permitir o uso do cupom.</span>';
$_['entry_product']       = 'Produtos:<br /><span class="help">Escolha produtos específicos para aplicar o uso do cupom ou nenhuma seleção para que o cupom seja aplicado ao carrinho inteiro.</span>';
$_['entry_date_start']    = 'Data do início:';
$_['entry_date_end']      = 'Data do fim:';
$_['entry_uses_total']    = 'Usos por cupom:<br /><span class="help">O número máximo de vezes que o cupom gerado pode ser usado. Deixe em branco para ser ilimitado.</span>';
$_['entry_uses_customer'] = 'Usos por clientes:<br /><span class="help">O número máximo de vezes que o cupom pode ser usado por um único cliente. Deixe em branco para ser ilimitado.</span>';
$_['entry_status']        = 'Situação:';

// Error
$_['error_permission']    = 'Atenção: Você não possui permissão para modificar os cupons!';
$_['error_name']          = 'Nome do cupom deve possuir de 3 a 64 caracteres!';
$_['error_code']          = 'Código deve possuir de 3 a 10 caracteres!';
?>