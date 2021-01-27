# Kruskal算法

```java
class Solution {
    class Edge{
        int a,b,val;
        public Edge(int a, int b,int val){
            this.a = a;
            this.b = b;
            this.val = val;
        }
    }

    int[] fa;
    public int minCostConnectPoints(int[][] points) {
        //1. 初始化并查集
        fa = new int[points.length];
        for(int i=0; i < points.length; i++){
            fa[i] = i;
        }
        //2. 边由小到大排序
        List<Edge> list = new ArrayList<>();
        for(int i=0; i < points.length; i++){
            for(int j=i+1; j < points.length; j++){
                Edge e = new Edge(i,j,Math.abs(points[i][0]-points[j][0])+Math.abs(points[i][1]-points[j][1]));
                list.add(e);
            }
        }
        Collections.sort(list, (o1,o2) -> o1.val-o2.val);

        //3. 加入节点
        int result = 0;
        for(int i=0; i < list.size(); i++) {
            Edge e = list.get(i);
            int a = find(e.a), b = find(e.b);
            if(a != b){
                fa[a] = b;
                result += e.val;
            }
        }
        return result;
    }

    public int find(int x){
        if(fa[x] != x){
            fa[x] = find(fa[x]);
        }
        return fa[x];
    }
}
```

1、所以克鲁斯卡尔算法的具体思路是：将所有边按照权值的大小进行升序排序，然后从小到大一一判断，条件为：如果这个边不会与之前选择的所有边组成回路，就可以作为最小生成树的一部分；反之，舍去。直到具有 n 个顶点的连通网筛选出来 n-1 条边为止。筛选出来的边和所有的顶点构成此连通网的最小生成树。

2、按照权值val排序，并查集判断是否属于同一个集合















































