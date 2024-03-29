<?php return array (
  'plugins.generic.xmlGalley.displayName' => 'Composições em XML',
  'plugins.generic.xmlGalley.description' => 'Este plugin gera composições em XHTML de uma submissão em XML utilizando uma XSLT.',
  'plugins.generic.xmlGalley.manager.settings' => 'Configurações',
  'plugins.generic.xmlGalley.settings.description' => '<p>Com este plugin, composições da submissão serão automaticamente produzidas, a partir de um documento em XML, utilizando uma folha de estilos XSL para sua transformação.</p>',
  'plugins.generic.xmlGalley.settings.renderer' => 'Método de renderização XSLT',
  'plugins.generic.xmlGalley.settings.PHP5' => 'PHP 5.0.0+ com funções XSL (libxslt)',
  'plugins.generic.xmlGalley.settings.PHP4' => 'PHP 4.0.3+ com funções XSLT (Sablotron)',
  'plugins.generic.xmlGalley.settings.notAvailable' => 'Não disponível',
  'plugins.generic.xmlGalley.settings.externalXSLT' => 'Renderizador XSLT externo via linha de comando (ex.: Xalan)',
  'plugins.generic.xmlGalley.settings.externalXSLTDescription' => 'Informe o caminho físico completo para a ferramenta de renderização XSLT, com qualquer argumento necessário. Use %xsl para substituir o caminho do arquivo XSL de estilos, e %xml para substituir o caminho para o arquivo XML; ex.: <br/><pre>/usr/bin/java -jar ~/java/xalan.jar -HTML -IN %xml -XSL %xsl</pre>',
  'plugins.generic.xmlGalley.settings.externalXSLTTest' => 'Testar XSLT',
  'plugins.generic.xmlGalley.settings.externalXSLTSuccess' => 'Sucesso no teste de XSLT externo.',
  'plugins.generic.xmlGalley.settings.externalXSLTFailure' => 'Falha no teste de XSLT externo.',
  'plugins.generic.xmlGalley.settings.externalXSLTRequired' => 'Um processador XSLT externo via linha de comando deve ser especificado.',
  'plugins.generic.xmlGalley.settings.stylesheet' => 'Folha de estilos XSL',
  'plugins.generic.xmlGalley.settings.xslNLM' => '<a href="http://dtd.nlm.nih.gov/publishing/">DTD de publicação da revista NLM</a> &rarr; XHTML',
  'plugins.generic.xmlGalley.settings.xslFOP' => 'Habilitar renderização de composições em PDF usando XSL-FO (ex.: FOP)',
  'plugins.generic.xmlGalley.settings.xslFOPDescription' => 'Informe o caminho completo para o processador FO, com qualquer argumento necessário. Use %fo para substituir o caminho do arquivo XSL-FO, e %pdf para substituir o caminho para o arquivo PDF; ex.: <br/><pre>/usr/sbin/fop -fo %fo -pdf %pdf</pre>',
  'plugins.generic.xmlGalley.settings.xslFOPRequired' => 'Um processador FO externo via linha de comando deve ser especificado.',
  'plugins.generic.xmlGalley.settings.customXSL' => 'Folha de estilo XSL personalizada',
  'plugins.generic.xmlGalley.settings.customXSLRequired' => 'Uma folha de estilos XSL deve ser especificada.',
  'plugins.generic.xmlGalley.settings.customXSLInvalid' => 'O arquivo XSL enviado é inválido. Verifique o documento e tente novamente.',
); ?>