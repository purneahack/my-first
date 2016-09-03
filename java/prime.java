class Prime // capital name for any class conventionally 
{
	//public is modifier ... basically visibility 
	//static means it is class property and can be invoked with class name // search for concept of object and classes in JAVA
	//void here is return type of the funcion named as "main"
	//main is the special "function" in java from where the execution starts
	//String is a class is java
	//args (kuchhBhi) is the variable name here and it is for an array of strings
	public static void main ( String[] kuchhBhi) {
		//function body
		int x = 89;
		int n = [2,3,5,7];
		for (i = 0; i <= 3; i++){
			if (x%n[i]==0){
				System.out.println(" this is not prime no " +n);
			}else if (x%x==1){
				System.out.println(" this is prime no " +n);
			}
		}
	}
}