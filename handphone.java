

class handphone{
	//Atribut class pada handphone{
	String warna;
	String merk;
	String type;
	String os;
	
	void nyalakanhandphone(){
		System.out.println("Handphone Menyala");
	}
	
	void on(){
		System.out.println("HandPhone On");
	}
	
	void Off(){
		System.out.println("Handphone Off");
	}
	
	public static void main(String[] args){
		//Method class Handphone
		handphone HandphoneSinta=new handphone(); //Kelas yang Dibuat
		HandphoneSinta.warna="Hitam"; //Memakai data warna
		HandphoneSinta.merk="Samsung"; //Memakai data Merk
		HandphoneSinta.type="Smartphone"; //Memakai data Type
		HandphoneSinta.os="Kitkat"; //Memakai data Type
		
		System.out.println(HandphoneSinta.warna);
		System.out.println(HandphoneSinta.merk);
		System.out.println(HandphoneSinta.type);
		System.out.println(HandphoneSinta.os);
		
		//Memanggil method nyalakan handphone
		HandphoneSinta.nyalakanhandphone();
		//Memanggil Method on
		HandphoneSinta.on();
		//Memanggil Method off
		HandphoneSinta.Off();
	}
}