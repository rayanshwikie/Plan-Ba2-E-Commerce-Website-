public class Q1 { public static void main(String[] args) { 
       int [][] table = {{1,2,3},{3,7,9},{10,12,11},{12,14,19}}; 
int sum; 
sum = 0; 
for (int i = 0; i< table[0].length; i++) 
sum +=table [1][i];        
System.out.println("Sum of row 2 is: "+sum); 
    } 
}

