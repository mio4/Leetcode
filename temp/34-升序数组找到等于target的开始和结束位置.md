# Brute Force

```java
class Solution {
    public int[] searchRange(int[] nums, int target) {
        //1. 处理边界case
        if(nums == null || nums.length < 1){
            return new int[]{-1,-1};
        }

        //2. 顺序查找
        int start = -1, end = -1;
        for(int i = 0;i < nums.length; i++){
            if(nums[i] < target){
                continue;
            } else if(nums[i] == target){
                if(start == -1){
                   start = i;
                } else {
                    end = i;
                }
            } else {
                break;
            }
        }

        if(end < start){
            end = start;
        }

        return new int[]{start,end};
    }
}
```



（1）手动带入一些边界情况，例如`[1],1` 这种输入，输出不是`[-1,-1]`，而是`[0,0]`

（2）暴力破解没有难度，时间复杂度为`O(n)`



# Solution 2



```java
class Solution {
    public  int[] searchRange(int[] nums, int target) {
        //1. 处理边界case
        if(nums == null || nums.length < 1){
            return new int[]{-1,-1};
        }

        int medium = findTarget(nums, target);
        int left = medium, right = medium;
        if(medium == -1){
            return new int[]{-1,-1};
        } else {
            while(left >=0 && nums[left] == target){
                left--;
            }
            while(right < nums.length && nums[right] == target){
                right++;
            }
        }
        return new int[]{left+1,right-1};
    }

     public int findTarget(int[] nums, int target){
        int left = 0, right = nums.length - 1, medium;
        while(left <= right){
            medium =  left + (right - left) / 2;
            if(nums[medium] < target){
                left = medium + 1;
            } else if(nums[medium] == target){
                return medium;
            } else {
                right = medium - 1;
            }
        }

        return -1;
    }
}
```

（1）首先通过二分法，找到一个和target相同的数字

（2）因为数组是非降序，从这个数字左右查找相同的数字

（3）时间复杂度为`O(logN)`？（**待确认**）

![image-20201204111433002](image-20201204111433002.png)

























































