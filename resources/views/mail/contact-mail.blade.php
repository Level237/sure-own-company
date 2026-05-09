<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            color: #0f172a;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .header {
            background-color: #f97316;
            /* Primary orange */
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .content {
            padding: 30px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .details-box {
            background-color: #f1f5f9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 24px;
        }

        .detail-item {
            margin-bottom: 12px;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #64748b;
            letter-spacing: 0.05em;
            display: block;
            margin-bottom: 4px;
        }

        .detail-value {
            font-size: 16px;
            font-weight: 500;
            color: #0f172a;
        }

        .message-box {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
        }

        .message-label {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            color: #64748b;
            letter-spacing: 0.05em;
            display: block;
            margin-bottom: 12px;
        }

        .message-content {
            font-size: 15px;
            line-height: 1.7;
            color: #334155;
            white-space: pre-wrap;
        }

        .footer {
            background-color: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 20px;
            text-align: center;
            font-size: 13px;
            color: #64748b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau Message de Contact</h1>
        </div>

        <div class="content">
            <p>Bonjour,</p>
            <p>Vous avez reçu une nouvelle demande de contact depuis le site web <strong>SureOwn Company</strong>.</p>

            <div class="details-box">
                <div class="detail-item">
                    <span class="detail-label">Nom Complet</span>
                    <span class="detail-value">{{ $data['first_name'] }} {{ $data['last_name'] }}</span>
                </div>

                <div class="detail-item">
                    <span class="detail-label">Email</span>
                    <span class="detail-value"><a href="mailto:{{ $data['email'] }}"
                            style="color: #f97316; text-decoration: none;">{{ $data['email'] }}</a></span>
                </div>

                @if(!empty($data['phone']))
                    <div class="detail-item">
                        <span class="detail-label">Téléphone</span>
                        <span class="detail-value">{{ $data['phone'] }}</span>
                    </div>
                @endif

                @if(!empty($data['company']))
                    <div class="detail-item">
                        <span class="detail-label">Entreprise</span>
                        <span class="detail-value">{{ $data['company'] }}</span>
                    </div>
                @endif

                @if(!empty($data['job_title']))
                    <div class="detail-item">
                        <span class="detail-label">Poste occupé</span>
                        <span class="detail-value">{{ $data['job_title'] }}</span>
                    </div>
                @endif

                @if(!empty($data['country']))
                    <div class="detail-item">
                        <span class="detail-label">Pays</span>
                        <span class="detail-value">{{ $data['country'] }}</span>
                    </div>
                @endif

                @if(!empty($data['country']))
                    <div class="detail-item">
                        <span class="detail-label">Ville</span>
                        <span class="detail-value">{{ $data['town'] }}</span>
                    </div>
                @endif
            </div>

            <div class="message-box">
                <span class="message-label">Message</span>
                <div class="message-content">{{ $data['message'] }}</div>
            </div>
        </div>

        <div class="footer">
            Cet email a été envoyé automatiquement depuis le formulaire de contact du site SureOwn.
        </div>
    </div>
</body>

</html>