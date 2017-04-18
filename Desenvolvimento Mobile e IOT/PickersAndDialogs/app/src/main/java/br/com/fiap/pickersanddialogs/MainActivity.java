package br.com.fiap.pickersanddialogs;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;
import android.widget.DatePicker;
import android.widget.TimePicker;
import android.widget.Toast;

import java.util.Calendar;
import java.util.GregorianCalendar;

import static android.R.string.ok;

public class MainActivity extends AppCompatActivity {

//    AutoCompleteTextView actvPaises;
//    String[] paises = new String[] {"Argentina", "Brasil", "Chile", "Dinamarca", "Escócia"};
//
//    DatePicker dtpAniversario;
//    TimePicker tmpHorario;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

//        actvPaises = (AutoCompleteTextView) findViewById(R.id.actvPaises);
//        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.simple_spinner_dropdown_item, paises);
//        actvPaises.setAdapter(adapter);
//
//        dtpAniversario = (DatePicker) findViewById(R.id.dtpAniversario);
//        tmpHorario = (TimePicker) findViewById(R.id.tmpHorario);

    }

    public void salvar(View v) {
//        int year = dtpAniversario.getYear();
//        int month = dtpAniversario.getMonth() + 1;
//        int day = dtpAniversario.getDayOfMonth();
//
//        int hour = 0;
//        int minute = 0;
//        if (android.os.Build.VERSION.SDK_INT >= android.os.Build.VERSION_CODES.M) {
//            hour = tmpHorario.getHour();
//            minute = tmpHorario.getMinute();
//        }
//
//        AlertDialog.Builder dialog = new AlertDialog.Builder(this);
//        dialog.setTitle(getString(R.string.data_escolhida));
//        dialog.setMessage(day + " / " + month + " / " + year + " : " + hour + ":" + minute + "hs");
//        dialog.show();

//        AlertDialog.Builder builder = new AlertDialog.Builder(this);
//        builder.setTitle(R.string.titulo);
//        builder.setMessage(R.string.msg);
//        builder.setIcon(android.R.drawable.star_big_on);
//        builder.setCancelable(false);
//        builder.setPositiveButton(getString(R.string.ok), new DialogInterface.OnClickListener() {
//            @Override
//            public void onClick(DialogInterface dialog, int which) {
//                Toast.makeText(MainActivity.this, getString(R.string.clicou_em_ok), Toast.LENGTH_LONG).show();
//            }
//        });
//        builder.setNegativeButton(getString(R.string.fechar), new DialogInterface.OnClickListener() {
//            @Override
//            public void onClick(DialogInterface dialog, int which) {
//                Toast.makeText(MainActivity.this, getString(R.string.clicou_em_fechar), Toast.LENGTH_LONG).show();
//            }
//        });
//        builder.show();

        ProgressDialog progressDialog = new ProgressDialog(this);
        progressDialog.setTitle("Carregando");
        progressDialog.setMessage("Aguarde...");
        progressDialog.show();


    }
}
