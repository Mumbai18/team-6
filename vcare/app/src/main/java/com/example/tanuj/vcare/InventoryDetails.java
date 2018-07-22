package com.example.tanuj.vcare;

import android.content.DialogInterface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class InventoryDetails extends AppCompatActivity {

    TextView textViewRemainingKits;
    Button buttonUpdateInventory;
    EditText editTextInventory;
    int medicalkit=100;
    String abc;
    String last;
    String url = "http://10.49.162.27/inventory_update.php";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_inventory_details);

        textViewRemainingKits = (TextView) findViewById(R.id.textViewRemainingKits);
        buttonUpdateInventory = (Button) findViewById(R.id.buttonUpdateInventory);
        editTextInventory=(EditText)findViewById(R.id.editTextInventory);


        textViewRemainingKits.setText(String.valueOf(medicalkit));


        buttonUpdateInventory.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                abc=editTextInventory.getText().toString().trim();
                medicalkit-=Integer.parseInt(abc);
                last=String.valueOf(medicalkit);
                Toast.makeText(InventoryDetails.this, String.valueOf(medicalkit), Toast.LENGTH_SHORT).show();
                StringRequest stringRequest=new StringRequest(Request.Method.POST, url,
                        new Response.Listener<String>() {
                            @Override
                            public void onResponse(String response) {




                            }
                        }, new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {

                        Toast.makeText(InventoryDetails.this, "Error..", Toast.LENGTH_SHORT).show();
                        error.printStackTrace();

                    }
                }){
                    @Override
                    protected Map<String, String> getParams() throws AuthFailureError {

                        Map<String,String> params=new HashMap<String, String>();


                        params.put("id","2");
                        params.put("medical-kit",last);

                        return params;

                    }
                };

                MySingleton2.getInstance(InventoryDetails.this).addToRequestQueue(stringRequest);


            }
        });


    }


}

