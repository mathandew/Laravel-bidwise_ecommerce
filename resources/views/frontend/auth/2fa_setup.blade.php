

 <div class="container">
    <h2>Set Up Two-Factor Authentication</h2>
    <p>Scan the QR code below with your authentication app, such as Google Authenticator or Authy:</p>
    <div>
        {!! $qrCode !!}
    </div>
    <p>Alternatively, you can enter this key manually: <strong>{{ $secret }}</strong></p>
    <p>Once you have set up 2FA, click the button below to proceed:</p>
    <a href="{{ route('2fa.verify') }}" class="btn btn-primary">Verify Two-Factor Authentication</a>
</div>