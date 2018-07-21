package com.example.tanuj.vcare;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        final User user = new User(MainActivity.this);
        if(user.getName().equals("")){
            Intent intent = new Intent(MainActivity.this, MainOptions.class);
            startActivity(intent);
        }
//        Intent intent = new Intent(MainActivity.this, MainOptions.class);
//        startActivity(intent);
    }
    public void onSignOut(){
        new User(MainActivity.this).removeUser();
        Intent i = new Intent(MainActivity.this,MainOptions.class);
        startActivity(i);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.main_menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()){
            case R.id.sign_out_menu:
                onSignOut();
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }
    }

}