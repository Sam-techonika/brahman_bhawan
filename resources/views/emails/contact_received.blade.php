<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin:0; padding:0; background:#f8fafc; font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;">

    <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background:#f8fafc; padding:24px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 6px 18px rgba(15,23,42,0.08);">

                    <tr>
                        <td style="background:linear-gradient(90deg,#f97316,#fb923c); padding:22px 24px; color:#fff; text-align:left;">
                            <h1 style="margin:0; font-size:20px; line-height:1.1; font-weight:700;">New Contact Message</h1>
                            <p style="margin:6px 0 0; opacity:0.95; font-size:13px;">From: <strong style="color:#fff;">{{ $contact->name }}</strong> — {{ $contact->email }}</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:20px 24px; color:#0f172a; font-size:14px;">
                            <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#64748b;">Subject</div>
                                        <div style="margin-top:6px; font-weight:600;">{{ $contact->subject ?? '—' }}</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#64748b;">Message</div>
                                        <div style="margin-top:8px; white-space:pre-line; line-height:1.5;">{{ $contact->message }}</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#64748b;">Phone</div>
                                        <div style="margin-top:6px;">{{ $contact->phone ?: '—' }}</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-top:10px;">
                                        <a href="mailto:{{ $contact->email }}" style="display:inline-block; background:#0ea5a4; color:#fff; text-decoration:none; padding:10px 16px; border-radius:8px; font-weight:600;">Reply to Sender</a>
                                        <a href="tel:{{ $contact->phone }}" style="display:inline-block; margin-left:10px; background:#e2e8f0; color:#0f172a; text-decoration:none; padding:10px 16px; border-radius:8px; font-weight:600;">Call</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="background:#f1f5f9; padding:14px 24px; font-size:12px; color:#64748b;">
                            This message was sent from the website contact form. Reply to the sender to follow up.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
