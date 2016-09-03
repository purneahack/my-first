class PrimeEx
{
	public static void main(String[] args)
	{
		int i,m=0,myFlagWithAnyName=0;
		int n=15;//it is the number to be checked also how to input value of any random number
		m=n/2; //integer division 
		i=2;
		for(;i<=m;i++){
			if(n%i==0){
				String text = "Number is not prime";
				System.out.println("Number is not prime"); //calling a function named  "println"
				//System.out.println(text); //above line is same
				myFlagWithAnyName=1; 
				break;
			}
		}
		if(myFlagWithAnyName==0){
			System.out.println("Number is prime");
		}
	}
}