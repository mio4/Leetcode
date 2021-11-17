```cmd
		3
  2   3
    3   1
```
max = 3 + 3 + 1 = 7
节点的数量不超过10,000个，节点的值在[0,10000]



对于一棵树，根节点是O，左子树是L，右子树是R
假设
f（o）：**选择O的情况下，O的子树被选择的最大权值和**
g（o）：**不选择O的情况下，O的子树被选择的最大权值和**
那么`f（o） = val（O）+ g（O.left）+ g（O.right）`
并且`g（o） = max（f（O.left），g（O.left））+ max（f（O.right），g（O.right））`
使用后序遍历的方式：好处是先计算子节点的值，最后计算根节点的值！节约时空



```java
    static Map<TreeNode, Integer> fMap = new HashMap<>();
    static Map<TreeNode, Integer> gMap = new HashMap<>();
    public static int rob(TreeNode root) {
        if(root == null){
            return 0;
        }
        dfs(root);
        return Math.max(fMap.get(root),gMap.get(root));
    }

    public static void dfs(TreeNode root){
        if(root == null){
            return;
        }
        dfs(root.left);
        dfs(root.right);
        fMap.put(root, root.val+gMap.getOrDefault(root.left,0)+gMap.getOrDefault(root.right,0));
        gMap.put(root, Math.max(fMap.getOrDefault(root.left,0),gMap.getOrDefault(root.left,0))
                +Math.max(fMap.getOrDefault(root.right,0),gMap.getOrDefault(root.right,0)));
    }
```



二叉树版本的打家劫舍：

① 首先我们只看根节点的普通情况：
（1）如果根节点不被选择，那么最终最大权值 = 左子树的最大权值 + 右子树的最大权值；

（2）如果根节点被选择，那么最终最大权值 = 根节点value + 左子树的最大权值（必须是左子树根节点不被选择的情况） + 右子树的最大权值（必须是右子树根节点不被选择的情况）

最后需要返回Max（（1），（2））

② 两个辅助Map，都是为了存储某个节点对于特定情况的最大权值，fMap里的都是选择了根节点，gMap里的都是没有选择根节点的最大权值。

③ 然后是考虑如何迭代fMap和gMap？

f(o) = o.value + g(o.left) + g(o.right) //因为o.left不能被选择，所以要用g(o.left)函数，因为o.right不能被选择，所以要用g(or.right)函数

g(o) = max(f(o.left), g(o.left)) + ... //因为左子树这里就可以看成一个新的根节点，返回max也是①里的结论，需要返回两种情况下的最大值。







---

TODO

总结各种打家劫舍的方式。。。
















































