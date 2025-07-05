window.handleGoogleLogin = function (response) {
    $.ajax({
        url: `${apiBaseUrl}/auth/google`,
        method: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            credential: response.credential
        }),
        success: function (res) {
            if (res.status == 200) {
                //check it out if it's new user or not
                const email = res.data.email;
                const name = res.data.name;
                if(res.data.status){ //it means user login
                    $.ajax({
                        url: '/loginGoogle',
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: {
                            email: email
                        },
                        success: function (res) {
                            window.location.href = `/home`;
                        },
                        error: function (xhr) {
                            alert('Login failed');
                            console.error(xhr.responseText);
                        }
                    });
                }else{ //it means user register
                    window.location.href = `/register?email=${encodeURIComponent(email)}&name=${encodeURIComponent(name)}`;
                }
            }
        },
        error: function (xhr) {
            alert('Google login failed.');
            console.error(xhr.responseText);
        }
    });
};

window.fbAsyncInit = function () {
    FB.init({
        appId: gbci,
        cookie: true,
        xfbml: true,
        version: 'v19.0'
    });
};

window.handleFacebookLogin = function () {
    FB.getLoginStatus(function(response) {
        if (response.status !== 'connected') {
            FB.login(function(response) {
                if (response.authResponse) {
                    FB.api('/me', { fields: 'name,email' }, function(profile) {
                        $.ajax({
                            url: '/facebook-login',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                name: profile.name,
                                email: profile.email,
                                fb_id: profile.id
                            },
                            success: function (res) {
                                if (res.success) {
                                    window.location.href = res.redirect_url;
                                } else {
                                    alert(res.message);
                                }
                            }
                        });
                    });
                } else {
                    alert('Facebook login cancelled.');
                }
            }, { scope: 'email' });
        }
    });
};