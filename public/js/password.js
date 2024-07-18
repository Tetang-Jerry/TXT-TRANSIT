function visible() {
    let password = document.getElementById('password');

    if (password.type === 'password') {
        password.type = 'text';
    } else if (password.type === 'text') {
        password.type = 'password';
    }
}
