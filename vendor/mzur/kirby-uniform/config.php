<?php

Kirby::plugin('mzur/kirby-uniform', [
    'templates' => [
        'uniform/log-json' => __DIR__.'/templates/log-json.php',
        'emails/uniform-default' => __DIR__.'/templates/emails/default.php',
        'emails/uniform-table' => __DIR__.'/templates/emails/table.php',
    ],
    'snippets' => [
        'uniform/errors' => __DIR__.'/snippets/errors.php',
    ],
    'translations' => [
        'de' => [
            'uniform-filled-potty' => 'Es wurde das Feld ausgefüllt, das leer bleiben sollte. Falls Sie kein Spam-Bot sind, versuchen Sie es bitte erneut ohne das Feld auszufüllen.',
            'uniform-calc-incorrect' => 'Bitte lösen Sie die Rechenaufgabe.',
            'uniform-email-subject' => 'Nachricht über das Formular',
            'uniform-email-error' => 'Es ist ein Fehler beim Senden aufgetreten',
            'uniform-email-copy' => 'Kopie:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Beim Schreiben in die Log-Datei ist ein Fehler aufgetreten.',
            'uniform-login-error' => 'Benutzername oder Passwort falsch.',
            'uniform-webhook-error' => 'Beim Aufruf des Webhook ist ein Fehler aufgetreten: ',
            'uniform-email-select-error' => 'Ungültiger Empfänger.',
            'uniform-upload-mkdir-fail' => 'Zielverzeichnis konnte nicht erstellt werden.',
            'uniform-upload-exists' => 'Die Datei existiert bereits.',
            'uniform-upload-failed' => 'Die Datei konnte nicht hochgeladen werden.',
        ],
        'en' => [
            'uniform-filled-potty' => 'The form field that is supposed to be empty was filled. In case you are not a spam-bot, please try again leaving the field blank.',
            'uniform-calc-incorrect' => 'Please solve the arithmetic problem.',
            'uniform-email-subject' => 'Message from the web form',
            'uniform-email-error' => 'There was an error sending the form',
            'uniform-email-copy' => 'Copy:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'There was an error while writing to the logfile.',
            'uniform-login-error' => 'Wrong username or password.',
            'uniform-webhook-error' => 'There was an error calling the webhook: ',
            'uniform-email-select-error' => 'Invalid recipient.',
            'uniform-upload-mkdir-fail' => 'Could not create target directory.',
            'uniform-upload-exists' => 'The file already exists.',
            'uniform-upload-failed' => 'The file could not be uploaded.',
        ],
        'es' => [
             'uniform-filled-potty' => 'Se ha rellenado un campo del formulario que debería estar vacío. Si usted no es un spam bot, vuelva a intentarlo dejando el campo en blanco.',
            'uniform-calc-incorrect' => 'Por favor, resuelva el problema aritmético.',
            'uniform-email-subject' => 'Mensaje del formulario web',
            'uniform-email-error' => 'Se ha producido un error al enviar el formulario',
            'uniform-email-copy' => 'Copia:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Se ha producido un error al escribir en el archivo de registro.',
            'uniform-login-error' => 'El usuario o la contraseña no son correctos.',
            'uniform-webhook-error' => 'Se ha producido un error al llamar el webhook: ',
            'uniform-email-select-error' => 'Destinatario incorrecto.',
            // 'uniform-upload-mkdir-fail' => '',
            // 'uniform-upload-exists' => '',
            // 'uniform-upload-failed' => '',
        ],
        'fr' => [
            'uniform-filled-potty' => 'Le champ du formulaire supposé être vide a été renseigné. Dans le cas où vous ne seriez pas un robot spammeur, merci de ré-essayer en laissant ce champ vide.',
            'uniform-calc-incorrect' => 'Veuillez résoudre le problème arithmétique.',
            'uniform-email-subject' => 'Message de la part du site internet',
            'uniform-email-error' => 'Une erreur s’est produite lors de l’envoi du formulaire',
            'uniform-email-copy' => 'Copie :',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Une erreur s’est produite lors de l’écriture dans le fichier de log.',
            'uniform-login-error' => 'Identifiant ou mot de passe invalide.',
            'uniform-webhook-error' => 'Une erreur s’est produite lors de l’appel du webhook : ',
            'uniform-email-select-error' => 'Destinataire invalide.',
            // 'uniform-upload-mkdir-fail' => '',
            // 'uniform-upload-exists' => '',
            // 'uniform-upload-failed' => '',
        ],
        'it' => [
            'uniform-filled-potty' => 'Il campo che doveva restare vuoto è stato compilato. Se non sei uno spam-bot, per favore riprova a inviare il modulo senza compilarlo.',
            'uniform-calc-incorrect' => 'Per favore, risolvi il problema aritmetico.',
            'uniform-email-subject' => 'Messaggio dal modulo web',
            'uniform-email-error' => 'Errore durante l\'invio del modulo',
            'uniform-email-copy' => 'Copia:',
            'uniform-calc-plus' => 'più',
            'uniform-log-error' => 'Errore nella scrittura del file di log.',
            'uniform-login-error' => 'Nome utente o password errati.',
            'uniform-webhook-error' => 'Errore durante la chiamata del webhook: ',
            'uniform-email-select-error' => 'Destinatario non valido.',
            'uniform-upload-mkdir-fail' => 'Impossibile creare la cartella di destinazione.',
            'uniform-upload-exists' => 'File già esistente.',
            'uniform-upload-failed' => 'Impossibile effettuare l\'upload del file.',
        ],
        'nl' => [
            'uniform-filled-potty' => 'Er is een veld ingevuld dat leeg moet blijven. Mocht u geen Spam-Bot zijn, probeer het opnieuw zonder dat veld in te vullen.',
            'uniform-calc-incorrect' => 'Los a.u.b. de rekenkundige opgave op.',
            'uniform-email-subject' => 'Bericht van het webformulier',
            'uniform-email-error' => 'Er is een fout opgetreden bij het verzenden van het formulier',
            'uniform-email-copy' => 'Kopie:',
            'uniform-calc-plus' => 'plus',
            'uniform-log-error' => 'Er is een fout opgetreden bij het wegschrijven in het logbestand.',
            'uniform-login-error' => 'Ongeldige gebruikersnaam of wachtwoord.',
            'uniform-webhook-error' => 'Er is een fout opgetreden bij het aanroepen van de webhook: ',
            'uniform-email-select-error' => 'Ongeldige ontvanger.',
            'uniform-upload-mkdir-fail' => 'De map kon niet worden aangemaakt.',
            'uniform-upload-exists' => 'Het bestand bestaat al.',
            'uniform-upload-failed' => 'Het bestand kon niet worden geupload.',
        ],
        'pt_BR' => [
            'uniform-filled-potty' => 'O campo de formulário que deveria estar vazio foi preenchido. Caso você não seja um robô de SPAM, por favor tente novamente deixando o campo em branco.',
            'uniform-calc-incorrect' => 'Por favor resolva o problema aritmético.',
            'uniform-email-subject' => 'Mensagem do formulário online',
            'uniform-email-error' => 'Houve um erro ao enviar o formulário',
            'uniform-email-copy' => 'Cópia:',
            'uniform-calc-plus' => 'mais',
            'uniform-log-error' => 'Houve um erro ao escrever o arquivo de registro.',
            'uniform-login-error' => 'Usuário ou senha inválido.',
            'uniform-webhook-error' => 'Houve um erro ao chamar o webhook: ',
            'uniform-email-select-error' => 'Destinatário inválido.',
            'uniform-upload-mkdir-fail' => 'Não foi possível criar a pasta de destino.',
            'uniform-upload-exists' => 'O arquivo já existe.',
            'uniform-upload-failed' => 'O arquivo não pode ser enviado.',
        ],
        'pt_PT' => [
            'uniform-filled-potty' => 'O campo de formulário que deveria estar vazio foi preenchido. Caso você não seja um robô de SPAM, por favor tente novamente deixando o campo em branco.',
            'uniform-calc-incorrect' => 'Por favor resolva o problema aritmético.',
            'uniform-email-subject' => 'Mensagem do formulário online',
            'uniform-email-error' => 'Houve um erro ao enviar o formulário',
            'uniform-email-copy' => 'Cópia:',
            'uniform-calc-plus' => 'mais',
            'uniform-log-error' => 'Houve um erro ao escrever o ficheiro de registro.',
            'uniform-login-error' => 'Usuário ou senha inválido.',
            'uniform-webhook-error' => 'Houve um erro ao chamar o webhook: ',
            'uniform-email-select-error' => 'Destinatário inválido.',
            'uniform-upload-mkdir-fail' => 'Não foi possível criar a pasta de destino.',
            'uniform-upload-exists' => 'O ficheiro já existe.',
            'uniform-upload-failed' => 'O ficheiro não pode ser enviado.',
        ],
        'tr' => [
            'uniform-filled-potty' => 'Bos kalmasi gereken for alani doldurulmus. Spam-bot degilseniz lutfen bu formu bos birakip tekrar deneyin.',
            'uniform-calc-incorrect' => 'Please solve the arithmetic problem.',
            'uniform-email-subject' => 'Web-form\'dan gelen mesaj',
            'uniform-email-error' => 'Form gonderilirken bir hata olustu',
            'uniform-email-copy' => 'Kopyala:',
            'uniform-calc-plus' => 'arti',
            'uniform-log-error' => 'Log dosyasi olusturulurken hata olustu.',
            'uniform-login-error' => 'Yanlis kullanici adi veya sifre.',
            'uniform-webhook-error' => 'Webhook cagirilirken bir hata olustu: ',
            'uniform-email-select-error' => 'Gecersiz alici.',
            // 'uniform-upload-mkdir-fail' => '',
            // 'uniform-upload-exists' => '',
            // 'uniform-upload-failed' => '',
        ],
    ],
]);
