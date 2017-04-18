package br.com.fiap.notas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import br.com.fiap.notas.util.ArquivoDB;

public class LoginActivity extends AppCompatActivity {

    EditText edtEmail, edtSenha;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        edtEmail = (EditText) findViewById(R.id.email);
        edtSenha = (EditText) findViewById(R.id.senha);
    }

    public void logar(View v){
       if(validarLogin(edtEmail.getText().toString(), edtSenha.getText().toString())) {
               Intent toNotasCard = new Intent(this, NotasCardActivity.class);
               startActivity(toNotasCard);
       }else{
           Toast.makeText(this, getText(R.string.valida_login), Toast.LENGTH_SHORT).show();
       }
    }

    private static boolean validarLogin(String email, String senha) {
        return  android.util.Patterns.EMAIL_ADDRESS.matcher(email).matches() &&
                !TextUtils.isEmpty(senha);
    }

    public void cadastrar(View v){
        Intent toCadastrarLogin = new Intent(this, CadastraLoginActivity.class);
        startActivity(toCadastrarLogin);
    }

}

