///////////////////////////////  Main.dart //////////////////////
import 'package:myhub/pages/HomePage.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  //const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      debugShowCheckedModeBanner: false,    
      home: HomePage(),
    );
  }
}

///////////////////////////////// HomePage.dart  ////////////////////////////////

import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {


  final TextEditingController _usernameController = TextEditingController();
  final TextEditingController _passwordController = TextEditingController();
  final TextEditingController _cpasswordController = TextEditingController();

  final GlobalKey<FormState> _formKey = GlobalKey<FormState>();


  late String _email;
  late String _password;
  late String _cpassword;

  void _handleSignUp() {
    String _email = _usernameController.text;
    String _password = _passwordController.text;
    String _cpassword = _cpasswordController.text;

    // Perform sign-up logic here with username and password
    // Example: Validate inputs, call an API, etc.

    // Reset the text fields after sign-up
    _usernameController.clear();
    _passwordController.clear();
    _cpasswordController.clear();
  }

  @override
  void initState() {
    super.initState();
  }

  @override
  Widget build(BuildContext context) { 
    return Scaffold(
        backgroundColor: Colors.white,
        body:  ListView(
          children: [
            Column(
              children: [
                Image.asset(
                  'assets/sign_up.png',
                  height: 210,
                  width: 400,
                ),
              ],
            ),
            Column(
              children: [

                Container(
                  alignment: Alignment.centerLeft,
                  padding: const EdgeInsets.only(left: 8.0),
                  child: const Text("  Sign Up", style: TextStyle(fontWeight: FontWeight.bold,fontSize:
                  25.0,color: Colors.black,),
                  ),
                ),

                Padding(padding: const EdgeInsets.all(16.0),
                child: Form(
                  key: _formKey,
                  child: Column(
                    children: [
                      TextFormField(
                        controller: _usernameController,
                        decoration: const InputDecoration(labelText: 'Email', filled: true,
                            fillColor: Colors.white10, border: OutlineInputBorder(
                              borderSide: BorderSide(color: Colors.white10),
                            ), prefixIcon: Icon(
                          Icons.email_outlined,
                          color: Colors.black38,
                        )),
                        validator: (value){
                          if(value!.isEmpty) {
                            return 'Please enter your Email';
                          }
                          return null;
                        },
                        onSaved: (value){
                          _email = value!;
                        },
                      ),
                      const SizedBox(height: 20.0),
                      TextFormField(
                        controller: _passwordController,
                         decoration: const InputDecoration(labelText: 'Password', filled: true,
                             fillColor: Colors.white10, border: OutlineInputBorder(
                            borderSide: BorderSide(color: Colors.white10),
                          ), prefixIcon: Icon(
                              Icons.key_rounded,
                              color: Colors.black38,
                            ),
                             prefixText: ' ',
                             suffixIcon: Icon(
                               Icons.remove_red_eye_outlined,
                               color: Colors.black38,
                             ),
                             suffixStyle: TextStyle(color: Colors.black)),

                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Please enter password';
                          }
                          return null;
                        },
                        onSaved: (value) {
                          _password = value!;
                        },
                      ),
                      const SizedBox(height: 20.0),
                      TextFormField(
                        controller: _cpasswordController,
                        decoration: const InputDecoration(labelText: 'Confirm Password', filled: true,
                            fillColor: Colors.black12, border: OutlineInputBorder(
                          borderSide: BorderSide(color: Colors.white10),
                        ), prefixIcon: Icon(
                          Icons.key,
                          color: Colors.black38,
                        ),
                           prefixText: ' ',
                           suffixIcon: Icon(
                              Icons.remove_red_eye_outlined,
                              color: Colors.black38,
                           ),
                            suffixStyle: TextStyle(color: Colors.black)),
                        obscureText: true,
                        validator: (value) {
                          if (value!.isEmpty) {
                            return 'Please enter password';
                          }
                          return null;
                        },
                        onSaved: (value) {
                          _cpassword = value!;
                        },
                      ),
                      const SizedBox(height: 20.0,),

                      ElevatedButton(
                        onPressed: _handleSignUp,
                        style: ButtonStyle(
                          backgroundColor: MaterialStateProperty.all<Color>(Colors.black),
                          shape: MaterialStateProperty.all<RoundedRectangleBorder>(
                            RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(5.0),
                            ),
                          ),
                          padding: MaterialStateProperty.all<EdgeInsets>(
                            const EdgeInsets.symmetric(horizontal: 113.0, vertical: 20.0),
                          ),
                        ),
                        child: const Text(
                          'Create an account',
                          style: TextStyle(fontSize: 16.0),
                        ),
                      ),



                      /* RaisedButton(
                        onPressed: () {
                          if (_formKey.currentState!.validate()) {
                            _formKey.currentState?.save();
                            // Do something with the form data
                            print('Name: $_name');
                            print('Email: $_email');
                            print('Password: $_password');
                          }
                        },
                        child: Text('Submit'),
                      ),*/
                    ],
                  ),
                ),
                ),

                RichText(text: const TextSpan(
                  //style: DefaultTextStyle.of(context).style,
                  children: [
                    TextSpan(
                      text: "Already have an account? ",
                      style: TextStyle(fontSize:16.0, color: Colors.black),
                    ),
                    TextSpan(
                      text: "Sign In here",
                      style: TextStyle(fontSize:16.0, color: Colors.blue),
                    ),
                  ],
                ),),
                const Padding(padding: EdgeInsets.all(10.0)),
                const Text("or continue with", style: TextStyle(wordSpacing: 4.0),),
                const Padding(padding: EdgeInsets.all(6.0)),
                  Wrap(
                    spacing: 8.0, // Adjust the spacing between icons
                    children: <Widget>[
                      Container(
                        width: 110.0,
                        height: 60.0,
                        decoration: BoxDecoration(
                          color: Colors.black,
                          borderRadius: BorderRadius.circular(10.0),
                        ),
                        padding: const EdgeInsets.all(8.0),
                        child: const Icon(
                          Icons.apple,
                          color: Colors.white,
                          size: 40.0,
                        ),
                      ),
                      Container(
                        width: 110.0,
                        height: 60.0,
                        decoration: BoxDecoration(
                          color: Colors.white,
                          borderRadius: BorderRadius.circular(10.0),
                          border: Border.all(style: BorderStyle.solid, color: Colors.black),
                        ),
                        padding: const EdgeInsets.all(8.0),
                        child: const Icon(
                          Icons.g_mobiledata_outlined,
                          color: Colors.black,
                          size: 40.0,
                        ),
                      ),
                      Container(
                        width: 110.0,
                        height: 60.0,
                        decoration: BoxDecoration(
                          color: Colors.blueAccent,
                          borderRadius: BorderRadius.circular(10.0),
                          shape: BoxShape.rectangle,
                        ),
                        padding: const EdgeInsets.all(8.0),
                        child: const Icon(
                          Icons.facebook,
                          color: Colors.white,
                          size: 40.0,
                        ),
                      ),
                      // Add more Container widgets with Icons as needed
                    ],
                  ),
              ],
            ),
          ],
        ),
           
    );
  }

  
 }

