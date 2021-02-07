```html
root = [3,5,1,6,2,0,8,null,null,7,4], target = 5, K = 2
输出：[7,4,1]

         3
       5    1
     6  2  0  8
       7 4

k=0~1000，最多500个树节点，每个节点value不同
```

```
1、每个节点，生成[node][3]数组，其中0表示parent,1表示leftChildren，2表示rightChildren
2、BFS遍历，visited标记
    
     √
 0 1 2 3 
0    
1
2
```

```
test case
        0
      n   1
         n  2
           n  3
           
target=1,K=2
```

```
test case
             0
           2    1
         n  n  3 n  
target=3,k=3,res=[2]
```

```
test case
       0
     1   n
    n  2
      n  3
        n  4
```

```java
class Solution {
    private int[][] map = new int[501][3]; //0-500
    private List<Integer> res = new ArrayList<>();
    public List<Integer> distanceK(TreeNode root, TreeNode target, int K) {
        if(K == 0){
            res.add(target.val);
            return res;
        }
        for(int i=0; i <= 500; i++){
            map[i][0] = -1;
            map[i][1] = -1;
            map[i][2] = -1;
        }
        preOrder(root);
        bfs(target.val,K);
        return res;
    }

    //1. 解析坐标
    public void preOrder(TreeNode root){
        if(root == null){
            return ;
        }

        //确定children & parent
        if(root.left != null){
            map[root.val][1] = root.left.val;
            map[root.left.val][0] = root.val;
            preOrder(root.left);
        }
        if(root.right != null){
            map[root.val][2] = root.right.val;
            map[root.right.val][0] = root.val;
            preOrder(root.right);
        }
    }

    //2. 直接BFS，step + visited辅助数组
    public void bfs(Integer target, int K){
        Deque<Integer> queue = new ArrayDeque<>();
        int[] visited = new int[501];
        queue.add(target);
        int step = 0;
        while(!queue.isEmpty()){
            step++;
            int size = queue.size();
            for(int i=0; i < size; i++){
                int cur = queue.pollFirst();
                visited[cur] = 1;

                for(int j=0; j < 3; j++){
                    int next = map[cur][j];
                    if(next!=-1 && visited[next] == 0){
                        queue.addLast(next);
                        if(step == K){
                            res.add(next);
                        }
                    }
                }
            }
        }
    }
}
```

```java
//test case
   public static void main(String[] args) {
        //test case 1
//        TreeNode r1 = new TreeNode(3);
//        TreeNode r2 = new TreeNode(5);
//        TreeNode r3 = new TreeNode(1);
//        r1.left = r2;
//        r1.right = r3;
//        TreeNode r4 = new TreeNode(6);
//        TreeNode r5 = new TreeNode(2);
//        TreeNode r6 = new TreeNode(0);
//        TreeNode r7 = new TreeNode(8);
//        r2.left = r4;
//        r2.right = r5;
//        r3.left = r6;
//        r3.right = r7;
//        TreeNode r8 = new TreeNode(7);
//        TreeNode r9 = new TreeNode(4);
//        r5.left = r8;
//        r5.right = r9;
//        distanceK(r1,r2,2);
//        System.out.println();

        //test case 2
//        TreeNode r1 = new TreeNode(0);
//        TreeNode r2 = new TreeNode(1);
//        TreeNode r3 = new TreeNode(2);
//        TreeNode r4 = new TreeNode(3);
//        r1.right = r2;
//        r2.right = r3;
//        r3.right = r4;
//        distanceK(r1,r2,2);
//        System.out.println();

        //test case 3
//        TreeNode r1 = new TreeNode(0);
//        TreeNode r2 = new TreeNode(2);
//        TreeNode r3 = new TreeNode(1);
//        TreeNode r4 = new TreeNode(3);
//        r1.left = r2;
//        r1.right = r3;
//        r3.left = r4;
//        distanceK(r1,r4,3);
//        System.out.println();

        //test case 4
        TreeNode r1 = new TreeNode(0);
        TreeNode r2 = new TreeNode(1);
        r1.left = r2;
        TreeNode r3 = new TreeNode(2);
        r2.right = r3;
        TreeNode r4 = new TreeNode(3);
        r3.right = r4;
        TreeNode r5 = new TreeNode(4);
        r4.right = r5;
        distanceK(r1,r4,0);
        System.out.println();
    }
```

```
1. 将二叉树转换为图
2、求解图中到一个节点的所有距离，直接套用BFS公式
3、注意距离为0的边界情况
```













































































