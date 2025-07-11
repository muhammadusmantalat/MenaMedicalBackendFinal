@component('mail::message')
    <div style="text-align:center;">
        <h3>Welcome to Mena Medical Research</h3>
    </div>
    <div>
        <p>Dear Admin,</p>
        <p>You have a new contact request from:</p>
        <ul>
            <li><strong>Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Email:</strong> {{ $data['email'] }}</li>
            <li><strong>Message:</strong> {{ $data['message'] }}</li>
        </ul>
    </div>
    <div>
        <div style="padding-top: 10px">
            Thanks,<br>
            Mena Medical Research
        </div>
    </div>
@endcomponent
