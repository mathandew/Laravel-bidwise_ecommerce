

<div class="container">
    <h2>Verify Two-Factor Authentication</h2>
    <form action="{{ route('2fa.verify.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="2fa_code">Enter the 6-digit code from your authenticator app:</label>
            <input type="text" name="2fa_code" id="2fa_code" class="form-control" required>
        </div>
        @error('2fa_code')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>