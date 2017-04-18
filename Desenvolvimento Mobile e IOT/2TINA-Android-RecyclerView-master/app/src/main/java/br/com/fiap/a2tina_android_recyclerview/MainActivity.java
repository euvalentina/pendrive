package br.com.fiap.a2tina_android_recyclerview;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ListView;

import java.util.List;

public class MainActivity extends AppCompatActivity {

    ListView lstContatos;
    List<Contato> contatos;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        contatos = GeraListaContato.geraContato();

        lstContatos = (ListView) findViewById(R.id.lstContatos);
        ContatosAdapter contatosAdapter = new ContatosAdapter(this, contatos);
        lstContatos.setAdapter(contatosAdapter);
    }

}
