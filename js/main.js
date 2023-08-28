const showHiddenPass = (loginPass, loginEye) => {
    const input = document.getElementById(loginPass),
          iconEye = document.getElementById(loginEye)

    iconEye.addEventListener('click', () => {
        if(input.type === 'password') {
            // Exibe a senha
            input.type = 'text'

            // Altera o ícone de visualizar senha
            iconEye.classList.add('ri-eye-line')
            iconEye.classList.remove('ri-eye-off-line')
        } else {
            // Esconde a senha
            input.type = 'password'

            // Altera o ícone de visualizar senha
            iconEye.classList.remove('ri-eye-line')
            iconEye.classList.add('ri-eye-off-line')
        }
    })
}

showHiddenPass('login-pass','login-eye')