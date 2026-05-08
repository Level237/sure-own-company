<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 20px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .header { background: #0f172a; color: #fff; padding: 30px; text-align: center; }
        .header h1 { margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 1px; }
        .content { padding: 30px; }
        .section-title { font-size: 18px; font-weight: bold; color: #0f172a; border-bottom: 2px solid #f97316; padding-bottom: 5px; margin-bottom: 20px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #64748b; font-size: 12px; text-transform: uppercase; display: block; }
        .value { color: #1e293b; font-size: 16px; font-weight: 500; }
        .footer { background: #f8fafc; padding: 20px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SureOwn Company</h1>
            <p style="margin: 5px 0 0 0; opacity: 0.8;">Système de Commandes & Devis</p>
        </div>
        <div class="content">
            <div class="section-title">
                @if($data['submission_type'] === 'existing_order')
                    Nouveau Bon de Commande Reçu
                @else
                    Nouvelle Demande de Besoin
                @endif
            </div>

            <div class="field">
                <span class="label">Entreprise</span>
                <span class="value">{{ $data['company_name'] }}</span>
            </div>
            <div class="field">
                <span class="label">Personne de contact</span>
                <span class="value">{{ $data['contact_person'] }}</span>
            </div>
            <div class="field">
                <span class="label">Email</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>
            <div class="field">
                <span class="label">Téléphone</span>
                <span class="value">{{ $data['phone'] }}</span>
            </div>

            @if($data['submission_type'] === 'existing_order')
                <div class="field">
                    <span class="label">Type de service</span>
                    <span class="value">{{ $data['service_type'] }}</span>
                </div>
            @else
                <div class="field">
                    <span class="label">Type de demande</span>
                    <span class="value">{{ $data['type_of_request'] }}</span>
                </div>
                <div class="field">
                    <span class="label">Produit / Carburant</span>
                    <span class="value">{{ $data['product_type'] }}</span>
                </div>
                <div class="field">
                    <span class="label">Destination</span>
                    <span class="value">{{ $data['destination'] }}</span>
                </div>
                <div class="field">
                    <span class="label">Quantité</span>
                    <span class="value">{{ $data['quantity'] }}</span>
                </div>
                <div class="field">
                    <span class="label">Date souhaitée</span>
                    <span class="value">{{ $data['desired_date'] }}</span>
                </div>
            @endif

            @if(!empty($data['message']))
                <div class="field">
                    <span class="label">Message complémentaire</span>
                    <div style="background: #f1f5f9; padding: 15px; border-radius: 5px; margin-top: 5px;">
                        {{ nl2br(e($data['message'])) }}
                    </div>
                </div>
            @endif

            @if($data['submission_type'] === 'existing_order')
                <p style="color: #f97316; font-weight: bold; margin-top: 20px;">ℹ️ Un fichier est joint à cet email.</p>
            @endif
        </div>
        <div class="footer">
            Cet email a été généré automatiquement par le portail SureOwnCompany.
        </div>
    </div>
</body>
</html>
