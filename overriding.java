


public class handphone{
	//Atribut class pada handphone{
	String warna;
	String merk;
	String type;
	String os;
	
	void menelepon(){
		System.out.println("menelepon teman");
	}
	
	void sms(){
		System.out.println("sms teman");
	}
	
}
	public class smartphone extend handphone
          private String Email;
          private String browser;
   void browsing (){
          System.out.println("browsing internet");

}
     void menelepon(){
            System.out.println("menelpon teman");
  }
}
     public class phone{
   public static void main (String args[]){
      smartphone handphoneSinta = new smartphone();
            handphoneSinta.menelpon();
            handphoneSinta.browsing();
 }
}
	