package br.com.fiap.apostila_android;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void exibirToastPadraozao(View v) {
        Toast.makeText(MainActivity.this, "Toast padrãozão pra não esquecer", Toast.LENGTH_LONG).show();
    }

    public void telaViews1(View v) {
        Intent it = new Intent(MainActivity.this, Views1Activity.class);
        startActivity(it);
    }

}
