```java
class Solution {
    int[] count = new int[100];
    public int numTrees(int n) {
        if(n == 0){
            return 0;
        }
        int[] nums = new int[n+1];
        for(int i=1; i <= n; i++){
            nums[i] = i;
        }
        Arrays.fill(count,-1);
        return build(nums,1,n);
    }

    public int build(int[] nums,int left, int right){
        if(left >= right){
            return 1;
        }

        int result = 0;
        if(count[right-left] != -1){
            result += count[right-left];
        } else {
            for(int i=left; i <= right; i++){
                int leftCnt = build(nums,left,i-1);
                int rightCnt = build(nums,i+1,right);
                result += leftCnt*rightCnt;
            }
            count[right-left] = result;
        }

        return result;
    }
}
```

① count数组记忆已经递归的节点情况，避免重复递归计算

② 本题同95，主要在于根据BST的规律找到生成二叉搜索树的迭代函数













































