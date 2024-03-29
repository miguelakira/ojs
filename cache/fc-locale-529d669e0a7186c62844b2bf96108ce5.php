<?php return array (
  'plugins.importexport.native.displayName' => 'XML de artigos e edições',
  'plugins.importexport.native.description' => 'Permite importar e exportar artigos e edições em XML.',
  'plugins.importexport.native.cliUsage' => 'Uso: {$scriptName} {$pluginName} [comando] ...

Comandos:
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Parâmetros adicionais são obrigatórios para importar dados, dependendo da nodo raíz do documento XML, conforme orientações a seguir:

Se o nodo ráiz é <article> ou <articles>, parâmetros adicionais são obrigatórios.
Os seguintes formatos são aceitos:

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]',
  'plugins.importexport.native.export' => 'Exportar dados',
  'plugins.importexport.native.export.issues' => 'Exportar edições',
  'plugins.importexport.native.export.sections' => 'Exportar seções',
  'plugins.importexport.native.export.articles' => 'Exportar artigos',
  'plugins.importexport.native.selectIssue' => 'Escolher edição',
  'plugins.importexport.native.selectArticle' => 'Escolher artigo',
  'plugins.importexport.native.import.articles' => 'Importar artigos',
  'plugins.importexport.native.import.articles.description' => 'O arquivo importado contém um ou mais artigos. Escolha a edição e a seção para a qual deseja importar os dados; caso não deseje importar todos para a mesma seção e/ou edição, os mesmos podem ser separados em documentos XML diferentes ou movê-los às seções e edições corretas após a importação.',
  'plugins.importexport.native.import' => 'Importar dados',
  'plugins.importexport.native.import.description' => 'Este plugin suporta a importação de dados baseados no native.dtd Document Type Definition. Nodos raíz suportados são <article>, <articles>, <issue>, and <issues>.',
  'plugins.importexport.native.import.error' => 'Erro na importação',
  'plugins.importexport.native.import.error.description' => 'Um ou mais erros ocorreram durante o processo. Certifique-se que o arquivo esteja no formato correto. O detalhamento dos erros está listado a seguir.',
  'plugins.importexport.native.cliError' => 'ERRO:',
  'plugins.importexport.native.error.unknownUser' => 'Usuário especificado, "{$userName}", não existe.',
  'plugins.importexport.native.error.unknownJournal' => 'Caminho da revista, "{$journalPath}", não existe.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Não foi possível escrever no arquivo "{$fileName}".',
  'plugins.importexport.native.export.error.sectionNotFound' => 'Não há seção compatível com código  "{$sectionIdentifier}".',
  'plugins.importexport.native.export.error.issueNotFound' => 'Não há edição compatível com o ID "{$issueId}".',
  'plugins.importexport.native.export.error.articleNotFound' => 'Nenhum artigo é compatível com o ID "{$articleId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'Este plugin não suporta o nodo raíz "{$rootName}". Certifique-se de que o documento está em conformidade com a DTD e tente novamente.',
  'plugins.importexport.native.import.error.titleMissing' => 'Título para edição não informado.',
  'plugins.importexport.native.import.error.defaultTitle' => 'TÍTULO NÃO INFORMADO',
  'plugins.importexport.native.import.error.unknownIdentificationType' => 'Identificação "{$identificationType}" desconhecida informada no atributo "identification", do elemento "issue" da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'O valor boleano "{$value}" é inválido. Utilize apenas "true" ou "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'A data "{$value}" é inválida.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Os dados "{$type}" embutidos possuem codificação desconhecida.',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Não foi possivel salvar cópia de "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'A URL "{$url}" da edição "{$issueTitle}" é ilegal. Importações via Web suportam apenas métodos http, https, ftp, ou ftps.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'O tipo de arquivo suplementar "{$suppFileType}" é desconhecido.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'A URL "{$url}" não pode ser copiada para um arquivo local.',
  'plugins.importexport.native.import.error.duplicatePublicId' => 'O ID público para importar a edição "{$issueTitle}" já está em uso pela edição "{$otherIssueTitle}".',
  'plugins.importexport.native.import.error.sectionTitleMissing' => 'Um título de seção não foi informado para a edição "{$issueTitle}". Certifique-se que o documento XML esteja em conformidade com a DTD apropriada.',
  'plugins.importexport.native.import.error.sectionMismatch' => 'A seção "{$sectionTitle}" da edição "{$issueTitle}" é compatível com uma revista existente, mas a abreviatura ("{$sectionAbbrev}") é compatível com outra seção.',
  'plugins.importexport.native.import.error.articleTitleMissing' => 'Um título de artigo não foi informado na edição "{$issueTitle}", seção "{$sectionTitle}". Certifique-se de que o documento XML está em conformidade com a DTD apropriada, e que um título foi informado para o idioma da revista.',
  'plugins.importexport.native.import.error.articleTitleLocaleUnsupported' => 'O idioma ("{$locale}") do título do artigo ("{$articleTitle}"), da edição "{$issueTitle}", não é suportado pela revista.',
  'plugins.importexport.native.import.error.articleAbstractLocaleUnsupported' => 'O idioma ("{$locale}") do resumo do artigo "{$articleTitle}", da edição "{$issueTitle}", não é suportado pela revista.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'Falta uma informação de composição no artigo "{$articleTitle}", da seção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.suppFileMissing' => 'Falta um documento suplementar no artigo "{$articleTitle}", da seção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'Falta um documento de composição do artigo "{$articleTitle}", da seção "{$sectionTitle}", da edição "{$issueTitle}".',
  'plugins.importexport.native.import.success' => 'Importação de dados concluída com sucesso.',
  'plugins.importexport.native.import.success.description' => 'A importação de dados ocorreu sem problemas. Os itens importados estão listados a seguir.',
  'plugins.importexport.native.import.error.issueTitleLocaleUnsupported' => 'O título da edição ("{$issueTitle}") foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.issueDescriptionLocaleUnsupported' => 'A descrição da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.coverLocaleUnsupported' => 'A capa da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionTitleLocaleUnsupported' => 'O título da seção ("{$sectionTitle}") da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionAbbrevLocaleUnsupported' => 'A abreviatura da seção ("{$sectionAbbrev}") da edição ("{$issueTitle}") foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionIdentifyTypeLocaleUnsupported' => 'O tipo de identificação de seção ("{$sectionIdentifyType}") da edição ("{$issueTitle}") foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionPolicyLocaleUnsupported' => 'A política da seção ("{$sectionPolicy}") da edição ("{$issueTitle}") foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'O título da seção "{$section1Title}" e o título da seção  "{$section2Title}" da edição "{$issueTitle}" são compatíveis com edições diferentes existentes na revista.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'O título da seção "{$sectionTitle}" da edição "{$issueTitle}" é compatível com uma seção existente, mas o outro título desta seção não é compatível com o outro título da seção existente na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'A abreviatura da seção "{$section1Abbrev}" e a abreviatura da seção "{$section2Abbrev}" da edição "{$issueTitle}" são compatíveis com seções distintas existentes na revista.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'A abreviatura da seção "{$sectionAbbrev}" da edição "{$issueTitle}" é compatível com uma seção existente, mas outra abreviatura desta edição não é compatível com outra abreviatura de seção existente na revista.',
  'plugins.importexport.native.import.error.articleDisciplineLocaleUnsupported' => 'A (sub)área do conhecimento do "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleTypeLocaleUnsupported' => 'O tipo de artigo de "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSubjectLocaleUnsupported' => 'O assunto do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSubjectClassLocaleUnsupported' => 'A classificação de assunto do artigo "{$articleTitle}"da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageGeoLocaleUnsupported' => 'A cobertura geoespacial do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageChronLocaleUnsupported' => 'A cobertura cronológica do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleCoverageSampleLocaleUnsupported' => 'A cobertura por amostragem do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSponsorLocaleUnsupported' => 'O patrocinador do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleAuthorCompetingInterestsLocaleUnsupported' => 'O conflito de interesses do autor "{$authorFullName}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleAuthorBiographyLocaleUnsupported' => 'A biografia do autor "{$authorFullName}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'A composição final do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileTitleLocaleUnsupported' => 'O título do arquivo suplementar ("{$suppFileTitle}") do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileCreatorLocaleUnsupported' => 'O criador do arquivo suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSubjectLocaleUnsupported' => 'O assunto do arquivo suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileTypeOtherLocaleUnsupported' => 'O tipo do arquivo suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileDescriptionLocaleUnsupported' => 'A descrição do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFilePublisherLocaleUnsupported' => 'A editora do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSponsorLocaleUnsupported' => 'O patrocinador do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.import.error.articleSuppFileSourceLocaleUnsupported' => 'A fonte do documento suplementar "{$suppFileTitle}" do artigo "{$articleTitle}" da edição "{$issueTitle}" foi informado no idioma ("{$locale}"), não suportado por esta revista.',
  'plugins.importexport.native.error.uploadFailed' => 'O envio falhou; certifique-se de que o envio de arquivos está habilitado no servidor e que o arquivo não é maior que o permitido pelo PHP e/ou a configuração do servidor.',
  'plugins.importexport.native.import.error.articleAuthorAffiliationLocaleUnsupported' => 'A instituição/afiliação de "{$authorFullName}", autor do artigo "{$articleTitle}" publicado na edição "{$issueTitle}" foi informada no idioma ("{$locale}"), não suportado por esta revista.',
); ?>