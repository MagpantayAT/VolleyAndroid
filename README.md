# Post Data to API using Volley in Android
How to setup Volley to Post data from Android to you API

### Setting up Volley to your Android Project
- Open your project then navigate to `app > Gradle Scripts > build.gradle(app)` then add this `implementation 'com.android.volley:volley:1.1.1'` to yor dependencies.
- Next is to go to your `AndroidManifest.xml` located in `app > manifest` then add this before the application tag `<uses-permission android:name="android.permission.INTERNET"></uses-permission>`

### Setting up your Java code
- Go to the Java file that needs to communciate with your API and import the following:

`import com.android.volley.Request;`
`import com.android.volley.RequestQueue;`
`import com.android.volley.VolleyError;`
`import com.android.volley.toolbox.StringRequest;`
`import com.android.volley.toolbox.Volley;`

`import org.json.JSONException;`
`import org.json.JSONObject;`

`import java.util.HashMap;`
`import java.util.Map;`
