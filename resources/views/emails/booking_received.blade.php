<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Booking</title>
</head>

<body style="margin:0; padding:0; background:#f4f4f4; font-family:Arial, sans-serif;">

    <!-- Main Wrapper -->
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4">
        <tr>
            <td align="center" style="padding:20px 10px;">

                <!-- Card -->
                <table width="600" border="0" cellspacing="0" cellpadding="0"
                    style="background:#ffffff; border-radius:8px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td bgcolor="#4f46e5" style="padding:20px 25px; color:#ffffff;">
                            <h1 style="margin:0; font-size:20px; font-weight:600;">New Booking Received</h1>
                            <p style="margin:5px 0 0; font-size:14px;">
                                Reference: <strong>{{ $reference }}</strong>
                            </p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:25px; color:#333333; font-size:14px;">

                            <!-- Row 1 -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="50%" style="padding-bottom:15px;">
                                        <div style="font-size:12px; color:#6b7280;">Name</div>
                                        <div style="margin-top:5px; font-weight:bold;">{{ $booking->name }}</div>
                                    </td>

                                    <td width="50%" style="padding-bottom:15px;">
                                        <div style="font-size:12px; color:#6b7280;">Email</div>
                                        <div style="margin-top:5px; color:#4f46e5; font-weight:bold;">
                                            {{ $booking->email }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <!-- Row 2 -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="50%" style="padding-bottom:15px; padding-right:15px;">
                                        <div style="font-size:12px; color:#6b7280;">Phone</div>
                                        <div style="margin-top:5px;">{{ $booking->phone }}</div>
                                    </td>

                                    <td width="50%" style="padding-bottom:15px; padding-left:15px;">
                                        <div style="font-size:12px; color:#6b7280;">Room Type</div>
                                        <div style="margin-top:5px;">{{ $booking->room_type }}</div>
                                    </td>
                                </tr>
                            </table>


                            <!-- Dates / Guests -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#6b7280;">Check In</div>
                                        <div style="margin-top:5px;">
                                            {{ \Carbon\Carbon::parse($booking->check_in)->format('d M, Y') }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#6b7280;">Check Out</div>
                                        <div style="margin-top:5px;">
                                            {{ \Carbon\Carbon::parse($booking->check_out)->format('d M, Y') }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-bottom:12px;">
                                        <div style="font-size:12px; color:#6b7280;">Guests</div>
                                        <div style="margin-top:5px;">{{ $booking->guests }}</div>
                                    </td>
                                </tr>
                            </table>


                            <!-- Special Requests -->
                            @if($booking->special_requests)
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-bottom:20px;">
                                        <div style="font-size:12px; color:#6b7280;">Special Requests</div>
                                        <div style="margin-top:5px; white-space:pre-line;">
                                            {{ $booking->special_requests }}
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            @endif

                            <!-- Status -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <div style="font-size:12px; color:#6b7280;">Status</div>
                                        <div style="margin-top:7px; background:#f3f4f6; 
                              display:inline-block; padding:5px 10px; 
                              border-radius:20px; font-size:13px;">
                                            {{ ucfirst($booking->status) }}
                                        </div>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td bgcolor="#f3f4f6" style="padding:15px 25px; font-size:12px; color:#6b7280;">
                            This is an automated notification for a new booking.
                        </td>
                    </tr>

                </table>
                <!-- End Card -->

            </td>
        </tr>
    </table>

</body>

</html>