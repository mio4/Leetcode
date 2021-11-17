```java
class Solution {
    public  int minTime(int[] time, int m) {
        int right = 0;
        for(int i=0; i < time.length; i++){
            right += time[i];
        }
        int left = 0;
        while(left <= right){
            int middle = left + (right-left)/2;
            if(check(time,m,middle)) right = middle-1;
            else left = middle+1;
        }
        return left;
    }

    public  boolean check(int[] time,int m, int target){
        int days = 1;
        boolean help = true; //是否场外求助
        int maxTime = 0;
        int totalTime = 0;
        for(int i=0; i < time.length; i++){
            totalTime += time[i];
            maxTime = Math.max(maxTime,time[i]);
            if(totalTime > target){ //超过限制
                if(help){ //使用一次求助机会
                    totalTime -= maxTime;
                    help = false;
                } else{ //求助机会使用完，只能开始新的一天
                    days++;
                    help = true; //新的机会
                    totalTime = 0;
                    maxTime = 0;
                    i--;
                }
            }
        }
        return days <= m;
    }
}
```

1、暴力方法：m个for循环（X）

2、动态规划：找不到合理的状态转移（X）

3、题解：二分查找，

① 最大值一定在[0，数组所有元素之合]之间，所以可以二分。

②  二分的依据：贪心算法划分的数组天数小于给定的天数，贪心的边界在于最大值是否达到middle

③ 这种二分的思路类似开辟【0，m】全局数组，空余很多无效值，但是方便查找目标值













































