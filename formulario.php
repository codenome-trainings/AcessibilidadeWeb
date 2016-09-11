<div class="box-formulario">
    <div class="container">


        <form action="#">
            <label for="assunto" hidden>Nome</label>
            <input type="text" class="form-control formulario formulario-stroke" name="nome"
                   placeholder="Digite seu nome">
            <label for="email" hidden>E-mail</label>
            <input type="email" class="form-control formulario formulario-stroke" name="email"
                   placeholder="Digite seu email">
            <label for="assunto" hidden>Assunto</label>
            <label for="sel1" hidden="">Assunto</label>
            <select class="form-control formulario formulario-stroke" id="sel1">
                <option selected>Assunto</option>
                <option value="suporte">Suporte técnico</option>
                <option value="critivas">Criticas e elogios</option>
                <option value="outros">Outros</option>
            </select>
            <textarea class="form-control formulario formulario-stroke" rows="3"
                      placeholder="Digite sua mensagem"></textarea>
            <input type="submit" class="form-control btn btn-success btn-alterado">
        </form>
    </div>
</div>