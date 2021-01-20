```java
class Solution {
    public  List<TreeNode> generateTrees(int n) {
        if(n == 0){
            return new ArrayList<>();
        }
        int[] nums = new int[n+1];
        for(int i=1; i <= n; i++){
            nums[i] = i;
        }
        List<TreeNode> result = build(nums,1,n);
        return result;
    }

    public  List<TreeNode> build(int[] nums,int left, int right){
        List<TreeNode> list = new ArrayList<>();
        if(left > right){
            list.add(null);
            return list;
        }
        if(left == right){
            TreeNode cur = new TreeNode(nums[left]);
            list.add(cur);
            return list;
        }

        for(int i=left; i <= right; i++){
            List<TreeNode> leftNodes = build(nums,left,i-1);
            List<TreeNode> rightNodes = build(nums,i+1,right);
            for(int j=0; j < leftNodes.size(); j++){
                for(int k=0; k < rightNodes.size(); k++){
                    TreeNode cur = new TreeNode(nums[i]);
                    cur.left = leftNodes.get(j);
                    cur.right = rightNodes.get(k);
                    list.add(cur);
                }
            }
        }
        return list;
    }
}
```

① 【1，n】刚好是一个升序的序列，以某个数作为根节点，数组中这个数左边的数都小于它，右边的数都大于它，刚好满足BST的定义

②  拆分子问题：每个节点的左子树和右子树都可能有多种生成方案，所以需要交叉生成包含当前节点的新树

 













































