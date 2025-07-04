<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateDataKey请求参数结构体
 *
 * @method string getKeyId() 获取CMK全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置CMK全局唯一标识符
 * @method string getKeySpec() 获取指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。KeySpec 和 NumberOfBytes 必须指定一个
 * @method void setKeySpec(string $KeySpec) 设置指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。KeySpec 和 NumberOfBytes 必须指定一个
 * @method integer getNumberOfBytes() 获取生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024。KeySpec 和 NumberOfBytes 必须指定一个
 * @method void setNumberOfBytes(integer $NumberOfBytes) 设置生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024。KeySpec 和 NumberOfBytes 必须指定一个
 * @method string getEncryptionContext() 获取key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
 * @method void setEncryptionContext(string $EncryptionContext) 设置key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
 * @method string getEncryptionPublicKey() 获取PEM 格式公钥字符串，支持 RSA2048 和 SM2 公钥，用于对返回数据中的 Plaintext 值进行加密。若为空，则不对 Plaintext 值加密。
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) 设置PEM 格式公钥字符串，支持 RSA2048 和 SM2 公钥，用于对返回数据中的 Plaintext 值进行加密。若为空，则不对 Plaintext 值加密。
 * @method string getEncryptionAlgorithm() 获取非对称加密算法，配合 EncryptionPublicKey 对返回数据进行加密。目前支持：SM2（以 C1C3C2 格式返回密文），SM2_C1C3C2_ASN1 （以 C1C3C2 ASN1 格式返回密文），RSAES_PKCS1_V1_5，RSAES_OAEP_SHA_1，RSAES_OAEP_SHA_256。若为空，则默认为 SM2。
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) 设置非对称加密算法，配合 EncryptionPublicKey 对返回数据进行加密。目前支持：SM2（以 C1C3C2 格式返回密文），SM2_C1C3C2_ASN1 （以 C1C3C2 ASN1 格式返回密文），RSAES_PKCS1_V1_5，RSAES_OAEP_SHA_1，RSAES_OAEP_SHA_256。若为空，则默认为 SM2。
 * @method integer getIsHostedByKms() 获取表示生成的数据密钥是否被KMS托管。1:表示被KMS托管保存,0:表示KMS不托管。
 * @method void setIsHostedByKms(integer $IsHostedByKms) 设置表示生成的数据密钥是否被KMS托管。1:表示被KMS托管保存,0:表示KMS不托管。
 * @method string getDataKeyName() 获取数据密钥的名称，当IsHostedByKms为1时,必须填写。当IsHostedByKms为0时,可以不填，KMS不托管。
 * @method void setDataKeyName(string $DataKeyName) 设置数据密钥的名称，当IsHostedByKms为1时,必须填写。当IsHostedByKms为0时,可以不填，KMS不托管。
 * @method string getDescription() 获取数据密钥 的描述，最大100字节
 * @method void setDescription(string $Description) 设置数据密钥 的描述，最大100字节
 * @method string getHsmClusterId() 获取KMS 独享版对应的 HSM 集群 ID。如果指定HsmClusterId，表明根密钥在此集群里，会校验KeyId是否和HsmClusterId对应。
 * @method void setHsmClusterId(string $HsmClusterId) 设置KMS 独享版对应的 HSM 集群 ID。如果指定HsmClusterId，表明根密钥在此集群里，会校验KeyId是否和HsmClusterId对应。
 */
class GenerateDataKeyRequest extends AbstractModel
{
    /**
     * @var string CMK全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。KeySpec 和 NumberOfBytes 必须指定一个
     */
    public $KeySpec;

    /**
     * @var integer 生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024。KeySpec 和 NumberOfBytes 必须指定一个
     */
    public $NumberOfBytes;

    /**
     * @var string key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
     */
    public $EncryptionContext;

    /**
     * @var string PEM 格式公钥字符串，支持 RSA2048 和 SM2 公钥，用于对返回数据中的 Plaintext 值进行加密。若为空，则不对 Plaintext 值加密。
     */
    public $EncryptionPublicKey;

    /**
     * @var string 非对称加密算法，配合 EncryptionPublicKey 对返回数据进行加密。目前支持：SM2（以 C1C3C2 格式返回密文），SM2_C1C3C2_ASN1 （以 C1C3C2 ASN1 格式返回密文），RSAES_PKCS1_V1_5，RSAES_OAEP_SHA_1，RSAES_OAEP_SHA_256。若为空，则默认为 SM2。
     */
    public $EncryptionAlgorithm;

    /**
     * @var integer 表示生成的数据密钥是否被KMS托管。1:表示被KMS托管保存,0:表示KMS不托管。
     */
    public $IsHostedByKms;

    /**
     * @var string 数据密钥的名称，当IsHostedByKms为1时,必须填写。当IsHostedByKms为0时,可以不填，KMS不托管。
     */
    public $DataKeyName;

    /**
     * @var string 数据密钥 的描述，最大100字节
     */
    public $Description;

    /**
     * @var string KMS 独享版对应的 HSM 集群 ID。如果指定HsmClusterId，表明根密钥在此集群里，会校验KeyId是否和HsmClusterId对应。
     */
    public $HsmClusterId;

    /**
     * @param string $KeyId CMK全局唯一标识符
     * @param string $KeySpec 指定生成Datakey的加密算法以及Datakey大小，AES_128或者AES_256。KeySpec 和 NumberOfBytes 必须指定一个
     * @param integer $NumberOfBytes 生成的DataKey的长度，同时指定NumberOfBytes和KeySpec时，以NumberOfBytes为准。最小值为1， 最大值为1024。KeySpec 和 NumberOfBytes 必须指定一个
     * @param string $EncryptionContext key/value对的json字符串，如果使用该字段，则返回的DataKey在解密时需要填入相同的字符串
     * @param string $EncryptionPublicKey PEM 格式公钥字符串，支持 RSA2048 和 SM2 公钥，用于对返回数据中的 Plaintext 值进行加密。若为空，则不对 Plaintext 值加密。
     * @param string $EncryptionAlgorithm 非对称加密算法，配合 EncryptionPublicKey 对返回数据进行加密。目前支持：SM2（以 C1C3C2 格式返回密文），SM2_C1C3C2_ASN1 （以 C1C3C2 ASN1 格式返回密文），RSAES_PKCS1_V1_5，RSAES_OAEP_SHA_1，RSAES_OAEP_SHA_256。若为空，则默认为 SM2。
     * @param integer $IsHostedByKms 表示生成的数据密钥是否被KMS托管。1:表示被KMS托管保存,0:表示KMS不托管。
     * @param string $DataKeyName 数据密钥的名称，当IsHostedByKms为1时,必须填写。当IsHostedByKms为0时,可以不填，KMS不托管。
     * @param string $Description 数据密钥 的描述，最大100字节
     * @param string $HsmClusterId KMS 独享版对应的 HSM 集群 ID。如果指定HsmClusterId，表明根密钥在此集群里，会校验KeyId是否和HsmClusterId对应。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeySpec",$param) and $param["KeySpec"] !== null) {
            $this->KeySpec = $param["KeySpec"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
        }

        if (array_key_exists("EncryptionContext",$param) and $param["EncryptionContext"] !== null) {
            $this->EncryptionContext = $param["EncryptionContext"];
        }

        if (array_key_exists("EncryptionPublicKey",$param) and $param["EncryptionPublicKey"] !== null) {
            $this->EncryptionPublicKey = $param["EncryptionPublicKey"];
        }

        if (array_key_exists("EncryptionAlgorithm",$param) and $param["EncryptionAlgorithm"] !== null) {
            $this->EncryptionAlgorithm = $param["EncryptionAlgorithm"];
        }

        if (array_key_exists("IsHostedByKms",$param) and $param["IsHostedByKms"] !== null) {
            $this->IsHostedByKms = $param["IsHostedByKms"];
        }

        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
