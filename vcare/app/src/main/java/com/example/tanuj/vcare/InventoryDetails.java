package com.example.tanuj.vcare;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

public class InventoryDetails extends AppCompatActivity {

    TextView textViewRemainingKits;
    Button buttonUpdateInventory;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_inventory_details);

        textViewRemainingKits=(TextView)findViewById(R.id.textViewRemainingKits);
        buttonUpdateInventory=(Button)findViewById(R.id.buttonUpdateInventory);

        buttonUpdateInventory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

            }
        });

    }
    public void onSignOut(){
        new User(InventoryDetails.this).removeUser();
        Intent i = new Intent(InventoryDetails.this,MainOptions.class);
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
