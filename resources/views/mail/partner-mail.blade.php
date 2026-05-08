<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        .header { background: #0f172a; color: #fff; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { padding: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0f172a; display: block; }
        .value { background: #f8fafc; padding: 10px; border-radius: 5px; display: block; }
        .footer { text-align: center; font-size: 12px; color: #64748b; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouvelle Demande de Partenariat</h1>
        </div>
        <div class="content">
            <div class="field">
                <span class="label">Raison Sociale:</span>
                <span class="value">{{ $data['company_name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Secteur d'activité:</span>
                <span class="value">{{ $data['industry'] }}</span>
            </div>
            <div class="field">
                <span class="label">Nom du Responsable:</span>
                <span class="value">{{ $data['full_name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Poste occupé:</span>
                <span class="value">{{ $data['job_title'] }}</span>
            </div>
            <div class="field">
                <span class="label">Email Professionnel:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>
            <div class="field">
                <span class="label">Téléphone:</span>
                <span class="value">{{ $data['phone'] }}</span>
            </div>
            <div class="field">
                <span class="label">Motivation:</span>
                <span class="value">{{ nl2br(e($data['message'])) }}</span>
            </div>
        </div>
        <div class="footer">
            <p>Ce message a été envoyé via le formulaire de partenariat de SureOwnCompany.</p>
        </div>
    </div>
</body>
</html>
