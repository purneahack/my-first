class PrimeEx1
{
	public static void main(String[] args)
	{
		int i,m=0,flag=0;//why flag was consider? Is it nessecarry to use flag or if else statement can be used
		System.out.println("Enter the value of n :");
		//it isthe number to be checked int n= ;
		m=n/2;
		for(i=2;i<=m;i++)
		{
			if(n%i==0)
			{
				System.out.println("Number is not prime");
				flag=1;
				break;
			}
		}
		if(flag==0)
			System.out.println("Number is prime");
	}
}