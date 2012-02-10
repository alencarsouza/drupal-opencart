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
$_['heading_title']       = 'MoIP';
$_['heading_description'] = 'Configuração para pagamentos com o serviço MoIP';

// Text
$_['text_payment']        = 'Formas de pagamento'; 
$_['text_success']        = 'Sucesso: Você modificou as configurações do módulo MoIP!';
$_['text_moip']           = '<a onclick="window.open(\'http://www.moip.com.br/\');"><img src="view/image/payment/moip.png" alt="MoIP" title="MoIP" style="border: 1px solid #EEEEEE;" /></a>';

// Entry
$_['entry_status']        = 'Situação:';
$_['entry_geo_zone']      = 'Zona Geográfica:';
$_['entry_email']         = 'E-mail:';
$_['entry_order_status']  = 'Situação Padrão:';
$_['entry_aguardando']    = 'Situação Aguardando:';
$_['entry_cancelado']     = 'Situação Cancelado:';
$_['entry_aprovado']      = 'Situação Aprovado:';
$_['entry_analize']       = 'Situação em Análise:';
$_['entry_completo']      = 'Situação Completo:';
$_['entry_encryption']    = 'Razão do pagamento:';
$_['entry_test']          = 'Modo de Teste:';
$_['entry_sort_order']    = 'Ordem:';

// Help
$_['help_encryption']     = 'Digite a Razão do pagamento que pode ser simplesmente o nome de sua loja.';
$_['help_aguardando']     = 'Situação para identificar um pedido que aguarda resposta do MoIP.';
$_['help_cancelado']      = 'Situação para identificar um pedido que foi cancelado pelo MoIP.';
$_['help_aprovado']       = 'Situação para identificar um pedido que foi aprovado pelo MoIP e aguarda o pagamento.';
$_['help_analize']        = 'Situação para identificar um pedido que está em análise pelo MoIP.';
$_['help_completo']       = 'Situação para identificar um pedido que está com o pagamento completo.';

// Error
$_['error_permission']    = 'Atenção: Você não permissão para alterar o módulo MoIP!';
$_['error_email']         = 'Por favor, digite o seu E-mail cadastrado no MoIP!';
$_['error_encryption']    = 'Por favor, digite a Razão do pagamento!';
?>