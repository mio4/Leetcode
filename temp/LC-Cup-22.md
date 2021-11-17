

```java
		public static int paintingPlan(int n, int k) {
        //1. 边界情况处理
        if(k == 0) return 1;
        if(k == n*n) return 1;


        //2. 常规暴力
        int result = 0;
        for(int i=0; i <= n; i++){
            for(int j=0; j <= n; j++){
                if(i*n+j*n-i*j == k){
                    result += C(n,i)*C(n,j);
                }
            }
        }
        return result;
    }

    public static int C(int n,int m){
        int A = 1;
        for(int i=0; i < m; i++){
            A *= n;
            n--;
        }
        int B = 1;
        for(int i=0; i < m; i++){
            B *= (i+1);
        }
        return A/B;
    }
```

1、m个行，m个列，交叉点是m*n个

2、找到满足条件的行列个数，直接获取组合，`C(n,m) =m个降级n / n个从1开始升级阶乘`











































