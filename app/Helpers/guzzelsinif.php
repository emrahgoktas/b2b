use GuzzleHttp\Client;

class LogoAPI
{
    private $api_url;
    private $auth_params;

    public function __construct($api_url, $auth_params)
    {
        $this->api_url = $api_url;
        $this->auth_params = $auth_params;
    }

    public function getStock($product_code)
    {
        // GuzzleHTTP istekleri yapmak için bir istemci nesnesi oluşturun
        $client = new Client();

        // Stok bilgisi almak için istek yapın
        $response = $client->get(
            $this->api_url.'/stok/getir',
            [
                'query' => [
                    'apikey' => $this->auth_params['apikey'],
                    'secretkey' => $this->auth_params['secretkey'],
                    'malKodu' => $product_code
                ]
            ]
        );

        // Yanıtı JSON olarak çözümle
        $data = json_decode($response->getBody()->getContents(), true);

        // Stok bilgisini döndürün
        return $data['StokMiktar'];
    }

    public function updateStock($product_code, $new_stock)
    {
        // GuzzleHTTP istekleri yapmak için bir istemci nesnesi oluşturun
        $client = new Client();

        // Stok bilgisini güncellemek için istek yapın
        $response = $client->post(
            $this->api_url.'/stok/guncelle',
            [
                'query' => [
                    'apikey' => $this->auth_params['apikey'],
                    'secretkey' => $this->auth_params['secretkey']
                ],
                'form_params' => [
                    'StokKod' => $product_code,
                    'StokMiktar' => $new_stock
                ]
            ]
        );

        // Yanıtı JSON olarak çözümle
        $data = json_decode($response->getBody()->getContents(), true);

        // Güncellenen stok bilgisini döndürün
        return $data;
    }
}
