```java
class Solution {
    public int breakfastNumber(int[] staple, int[] drinks, int x) {
        Arrays.sort(staple);
        Arrays.sort(drinks);
        int result = 0;
        int left = 0;
        int right = drinks.length-1;
        while(left < staple.length && right >= 0){
            if(staple[left] + drinks[right] <= x){
                result = (result + right + 1) % (int)(1e9+7);
                left++;
            } else {
                right--;
            }
        }
        return result;
    }
}
```

1、双指针

2、指针的目的不是挨个找到合适的组合，而是找到所有满足条件的数组边界



















































