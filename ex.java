public class ex {
    public static void main(String[]args){
    int [] [] a= {{1,2,3},{1,2,3},{1,2,3},{1,2,3}};
    int sum=0;
    for (int i = 0; i < a.length ;i++){
        for (int j =0 ; j < a[i].length ;j++){
            sum=sum+a[i][j];
        }
        
    }
    System.out.println("the sum of the whole array is "+sum);
            System.out.println();

    

    for (int i=0 ; i<a.length;i++){
        sum=0;
        for ( int j = 0; j< a[i].length;j++){
            sum=sum +a[i][j];
        }
        System.out.println("the sum of row "+i+" is "+sum);
    }
            System.out.println();

      for (int i=0 ; i<a.length;i++){
        sum=0;
        for ( int j = 0; j< a[i].length;j++){
            sum=sum +a[j][i];
        }
        System.out.println("the sum of column "+i+" is "+sum);
               

    }
    }}