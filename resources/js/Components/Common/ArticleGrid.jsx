import ArticleCard from "../UI/ArticleCard";

export default function ArticleGrid({ articles }) {
    return (
        <div className="container my-5">
            <div className="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                {articles.length > 0 ? (
                    articles.map((article) => (
                        <div key={article.id} className="col">
                            <ArticleCard article={article} />
                        </div>
                    ))
                ) : (
                    <p className="text-center w-100">Tidak ada artikel yang ditemukan.</p>
                )}
            </div>
        </div>
    );
}
