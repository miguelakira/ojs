<?php return array (
  'plugins.generic.sword.displayName' => 'Protocolo SWORD',
  'plugins.generic.sword.description' => 'Permite editores-gerentes e (opcionalmente) a autores depositar artigos por meio do protocolo SWORD.',
  'plugins.generic.sword.enabled' => 'O plugin SWORD foi habilitado.',
  'plugins.generic.sword.disable' => 'O plugin SWORD foi desabilitado.',
  'plugins.generic.sword.settings' => 'Configurações',
  'plugins.generic.sword.settings.allowAuthorSpecify' => 'Permitir ao autor especificar um ponto de depósito',
  'plugins.generic.sword.settings.depositPoints' => 'Pontos de depósito',
  'plugins.generic.sword.depositPoints.create' => 'Criar ponto de depósito',
  'plugins.generic.sword.depositPoints.edit' => 'Editar ponto de depósito',
  'plugins.generic.sword.depositPoints.type.automatic' => 'Automático',
  'plugins.generic.sword.depositPoints.type.optionalSelection' => 'Opcional; Flexível',
  'plugins.generic.sword.depositPoints.type.optionalFixed' => 'Opcional; Fixo',
  'plugins.generic.sword.depositPoints.type.manager' => 'Apenas gerentes',
  'plugins.generic.sword.depositPoints.type.description' => '<h4>Tipos de pontos de depósito:</h4>
<p><strong>Automático</strong>: O depósito ocorre de forma automática. Um ponto de depósito SWORD completo é especificado. Um login e e uma senha devem ser definidos. O depósito ocorre após notificação de aceitação ao autor.<br/>
<strong>Opcional; Flexível</strong>: O autor pode escolher entre depositar ou não. A URL especificada indica um documento de serviço, e o autor pode escolher qual ponto de depósito específico usar a partir desse documento. O depósito ocorre após notificação de aceitação ao autor.<br/>
<strong>Opcional; Fixo</strong>: O autor pode escolher entre depositar ou não. A URL informada indica um ponto SWORD específico. O depósito ocorre após notificação de aceitação ao autor.<br/>
<strong>Apenas gerentes</strong>: Apenas o editor gerente pode usar este ponto de depósito. A URL especificada indica um documento de serviço. O depósito é realizado manualmente pelo editor gerente por meio da interface de Importação/Exportação na administração da revista.
</p>',
  'plugins.generic.sword.depositPoints.password.description' => 'Caso não especifique uma senha aqui, será solicitada uma senha a você e/ou ao autor quando ocorrer o depósito. Note que esta senha será visível a todos os editores-gerentes, e será armazenada sem criptografia de segurança na base de dados.',
  'plugins.generic.sword.depositPoints.name' => 'Título',
  'plugins.generic.sword.automaticDepositComplete' => 'O item "{$itemTitle}" foi automaticamente depositado no repositório "{$repositoryName}".',
  'plugins.generic.sword.depositComplete' => 'O item "{$itemTitle}" foi depositado no repositorio "{$repositoryName}".',
  'plugins.generic.sword.authorDepositDescription' => '<p>Use o formulário a seguir como opção para depositar sua submissão, "{$submissionTitle}", em um dos repositórios listados. Use as caixas de seleção na coluna esquerda para escolher em quais repositórios deseja depositar sua submissão; cada repositório pode permitir especificar um ponto de depósito a partir do menu dropdown.</p>',
  'plugins.generic.sword.authorCustomDepositDescription' => '<p>Informe, opcionalmente, um ponto de depósito SWORD específico no formulário a seguir. Caso deseje, informe a URL SWORD, login e senha para o repositório e a submissão será depositada.</p>',
  'plugins.importexport.sword.displayName' => 'Plugin SWORD para importação/exportação e depósito',
  'plugins.importexport.sword.description' => 'Depositar artigos em repositórios remotos usando o protocolo de depósito SWORD.',
  'plugins.importexport.sword.deposit' => 'Depositar',
  'plugins.importexport.sword.serviceDocUrl' => 'URL do documento de serviço',
  'plugins.importexport.sword.depositUrl' => 'URL do ponto de depósito',
  'plugins.importexport.sword.depositPoint' => 'Pontos de depósito',
  'plugins.importexport.sword.depositPoint.addRemove' => 'Incluir/excluir',
  'plugins.importexport.sword.depositGalleys' => 'Depositar composições',
  'plugins.importexport.sword.depositEditorial' => 'Depositar arquivo editorial mais recente',
  'plugins.importexport.sword.depositSuccessful' => 'Depósito realizado com sucesso',
  'plugins.importexport.sword.depositSuccessfulDescription' => 'Os itens escolhidos foram depositados.',
  'plugins.importexport.sword.depositFailed' => 'Falha no depósito',
); ?>