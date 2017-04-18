package segundotina.fiap.com.br.myapplication;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

import java.util.Random;

public class MainActivity extends AppCompatActivity {

    private ImageView imgRandom;
    private int[] play = {R.drawable.home,
            R.drawable.home1,
            R.drawable.home2,
            R.drawable.home3,
            R.drawable.home4};


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        imgRandom = (ImageView) findViewById(R.id.imgRandom);


    }

    public void selecionar (View v) {

        Random r = new Random();

        int playRandom = r.nextInt(5);

        imgRandom.setImageResource(play[playRandom]);

            }



}
